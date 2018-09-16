<?php
	include("../config/config.php");
	
	$user_code = $_POST['user_code'];
	$package_code = $_POST['package_code'];
	$payment_code = $_POST['payment_code'];
	$bank_name = $_POST['bank_name'];
	$account_name = $_POST['account_name'];
	$account_number = $_POST['account_number'];
	$timestamp = round(microtime(true));
	
	$location = "location:../transactions-stan-package.php?fail-message=";
	
	include 'upload.php';
	
	// Perform an SQL query
	$sql = "INSERT INTO transactions_majesty(user_code, package_code, payment_code, bank_name, account_name, account_number, img, timestamp)
			values('$user_code', '$package_code', '$payment_code', '$bank_name', '$account_name', '$account_number', '$newfilename', '$timestamp')";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../transactions-stan-package.php?package_code='.$package_code.'&fail='.$mysqli->errno);
	} else {
		if (!move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir . $newfilename)) {
			$error = "Ada sesuatu yang gagal dalam unduh gambar.";
			header($location.$error);
		}
		header('location:../transactions-stan-package.php?package_code='.$package_code.'&success=1');
	}
?>