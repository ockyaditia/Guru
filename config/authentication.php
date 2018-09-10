<?php
	include('config.php');
	include("../key/RSA.php");
	session_start();
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM user_access WHERE email='$email'";
	
	if (!$result = $mysqli->query($sql)) {
		$message = "Error.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('location:../login.php?fail='.$mysqli->errno);
	} else {
		$data = $result->fetch_assoc();
		
		$RSA = new RSA();
		
		if ($password == $RSA->decrypt($data['password'])) {
			$_SESSION['code'] = htmlentities($data['code']);
			$_SESSION['email'] = htmlentities($data['email']);
			$_SESSION['status'] = htmlentities($data['status']);
			$_SESSION['name'] = htmlentities($data['name']);
			$_SESSION['phone_number'] = htmlentities($data['phone_number']);
			$_SESSION['facebook'] = htmlentities($data['facebook']);
			$_SESSION['twitter'] = htmlentities($data['twitter']);
			$_SESSION['instagram'] = htmlentities($data['instagram']);
			header('location:../index.php?success=1');
		} else {
			header('location:../login.php?fail=1');
		}
	}
?>