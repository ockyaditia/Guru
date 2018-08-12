<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_POST['code'];
	$code_old = $_POST['code_old'];
	$class = $_POST['class'];
	$subject = $_POST['subject'];
	$publisher = $_POST['publisher'];
	$description = $_POST['description'];
	
	$location = "location:../admin-update-data-ebook.php?fail-message=";
	
	include 'upload.php';
	include 'upload-file.php';
	
	if (basename($_FILES["img"]["name"]) == "" && basename($_FILES["file_name"]["name"]) == "") {
		// Perform an SQL query
		$sql = "UPDATE e_book SET
				code='$code',
				class='$class',
				subject='$subject',
				publisher='$publisher',
				description='$description'
				WHERE code='$code_old'";
	} else if (basename($_FILES["img"]["name"]) != "" && basename($_FILES["file_name"]["name"]) != "") {
		// Perform an SQL query
		$sql = "UPDATE e_book SET
				code='$code',
				class='$class',
				subject='$subject',
				publisher='$publisher',
				description='$description',
				file_name='$newfilename_pdf',
				img='$newfilename'
				WHERE code='$code_old'";
	} else if (basename($_FILES["img"]["name"]) == "") {
		// Perform an SQL query
		$sql = "UPDATE e_book SET
				code='$code',
				class='$class',
				subject='$subject',
				publisher='$publisher',
				description='$description',
				file_name='$newfilename_pdf'
				WHERE code='$code_old'";
	} else if (basename($_FILES["file_name"]["name"]) == "") {
		// Perform an SQL query
		$sql = "UPDATE e_book SET
				code='$code',
				class='$class',
				subject='$subject',
				publisher='$publisher',
				description='$description',
				img='$newfilename'
				WHERE code='$code_old'";
	}

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-ebook.php?fail='.$mysqli->errno);
	} else {
		if (basename($_FILES["img"]["name"]) != "" && basename($_FILES["file_name"]["name"]) != "") {
			if (!move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir . $newfilename)) {
				$error = "Ada sesuatu yang gagal dalam unduh gambar.";
				header($location.$error);
			}
			if (!move_uploaded_file($_FILES["file_name"]["tmp_name"], $target_dir_pdf . $newfilename_pdf)) {
				$error = "Ada sesuatu yang gagal dalam unduh berkas.";
				header($location.$error);
			}
		} else if (basename($_FILES["img"]["name"]) == "") {
			if (!move_uploaded_file($_FILES["file_name"]["tmp_name"], $target_dir_pdf . $newfilename_pdf)) {
				$error = "Ada sesuatu yang gagal dalam unduh berkas.";
				header($location.$error);
			}
		} else if (basename($_FILES["file_name"]["name"]) == "") {
			if (!move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir . $newfilename)) {
				$error = "Ada sesuatu yang gagal dalam unduh gambar.";
				header($location.$error);
			}
		}
		header('location:../admin-data-ebook.php?success=2');
	}
?>