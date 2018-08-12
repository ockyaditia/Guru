<?php
	include("../config/config.php");
	
	include("../key/RSA.php");
		
	$password = $_POST['password'];
	
	$RSA = new RSA();
	$password = $RSA->encrypt($password);
	
	header('location:../generate-password.php?password='.$password);
?>