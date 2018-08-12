<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_POST['code'];
	$code_old = $_POST['code_old'];
	$class = $_POST['class'];
	$subject = $_POST['subject'];
	$publisher = $_POST['publisher'];
	$description = $_POST['description'];
	
	$location = "location:../admin-update-data-video.php?fail-message=";
	
	include 'upload-video.php';
	
	if (basename($_FILES["file_name"]["name"]) == "") {
		// Perform an SQL query
		$sql = "UPDATE video SET
				code='$code',
				class='$class',
				subject='$subject',
				publisher='$publisher',
				description='$description'
				WHERE code='$code_old'";
	} else {
		// Perform an SQL query
		$sql = "UPDATE video SET
				code='$code',
				class='$class',
				subject='$subject',
				publisher='$publisher',
				description='$description',
				file_name='$newfilename_video'
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
		header('location:../admin-add-data-video.php?fail='.$mysqli->errno);
	} else {
		if (basename($_FILES["file_name"]["name"]) != "") {
			if (!move_uploaded_file($_FILES["file_name"]["tmp_name"], $target_dir_video . $newfilename_video)) {
				$error = "Ada sesuatu yang gagal dalam unduh berkas.";
				header($location.$error);
			}
		}
		header('location:../admin-data-video.php?success=2');
	}
?>