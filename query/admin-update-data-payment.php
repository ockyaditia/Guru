<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_POST['code'];
	$code_old = $_POST['code_old'];
	$bank_name = $_POST['bank_name'];
	$account_name = $_POST['account_name'];
	$account_number = $_POST['account_number'];
	
	$location = "location:../admin-update-data-payment.php?fail-message=";
	
	include 'upload.php';
	
	if (basename($_FILES["img"]["name"]) == "") {
		// Perform an SQL query
		$sql = "UPDATE payment SET
				code='$code',
				bank_name='$bank_name',
				account_name='$account_name',
				account_number='$account_number'
				WHERE code='$code_old'";
	} else {
		// Perform an SQL query
		$sql = "UPDATE payment SET
				code='$code',
				bank_name='$bank_name',
				account_name='$account_name',
				account_number='$account_number'
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
		header('location:../admin-add-data-payment.php?fail='.$mysqli->errno);
	} else {
		if (basename($_FILES["file_name"]["name"]) == "") {
			if (!move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir . $newfilename)) {
				$error = "Ada sesuatu yang gagal dalam unduh gambar.";
				header($location.$error);
			}
		}
		header('location:../admin-data-payment.php?success=2');
	}
?>