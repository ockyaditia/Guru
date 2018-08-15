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
			$_SESSION['code'] = $data['code'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['status'] = $data['status'];
			$_SESSION['name'] = $data['name'];
			$_SESSION['phone_number'] = $data['phone_number'];
			$_SESSION['facebook'] = $data['facebook'];
			$_SESSION['twitter'] = $data['twitter'];
			$_SESSION['instagram'] = $data['instagram'];
			header('location:../index.php');
		} else {
			header('location:../login.php?fail=1');
		}
	}
?>