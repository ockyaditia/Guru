<?php
    //error_reporting(E_ALL ^ E_DEPRECATED);
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'guru';
	
	//$host = 'ftp.tarorevolution.com';
	//$user = 'tarorevo_guru';
	//$pass = 'z1k0yZg24J';
	//$dbname = 'tarorevo_guru';

	$mysqli = new mysqli($host, $user, $pass, $dbname);
	
	if ($mysqli->connect_errno) {
		echo "Error.";
		echo "Error: Failed to make a MySQL connection.\n";
		echo "Error number: " . $mysqli->connect_errno . "\n";
		echo "Error: " . $mysqli->connect_error . "\n";
		exit;
	}
?>