<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	include("../key/RSA.php");
	
	$code = $_POST['code'];
	$code_old = $_POST['code_old'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$status = $_POST['status'];
	$password = $_POST['password'];
	$phone_number = $_POST['phone_number'];
	$facebook = $_POST['facebook'];
	$twitter = $_POST['twitter'];
	$instagram = $_POST['instagram'];
	
	$RSA = new RSA();
	$password = $RSA->encrypt($password);
	
	// Perform an SQL query
	$sql = "UPDATE user_access SET
				code='$code',
				email='$email',
				password='$password',
				name='$name',
				status='$status',
				phone_number='$phone_number',
				facebook='$facebook',
				twitter='$twitter',
				instagram='$instagram'
				WHERE code='$code_old'";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-user.php?fail='.$mysqli->errno);
	} else {
		header('location:../admin-data-user.php?success=2');
	}
?>