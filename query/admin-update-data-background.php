<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_POST['code'];
	
	$location = "location:../index.php?fail-message=";
	
	include 'upload.php';
	
	if (basename($_FILES["img"]["name"]) === "") {
		// Perform an SQL query
		$sql = "UPDATE background SET
				code='$code'
				WHERE code='$code'";
	} else {
		// Perform an SQL query
		$sql = "UPDATE background SET
				code='$code',
				img='$newfilename'
				WHERE code='$code'";
	}

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../index.php?fail='.$mysqli->errno);
	} else {
		if (basename($_FILES["img"]["name"]) != "") {
			if (!move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir . $newfilename)) {
				$error = "Ada sesuatu yang gagal dalam unduh gambar.";
				header($location.$error);
			}
		}
		header('location:../index.php?success=2');
	}
?>