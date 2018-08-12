<?php
    //error_reporting(E_ALL ^ E_DEPRECATED);
	//$host = 'mysql.idhostinger.com';
	//$user = 'u766613813_sap';
	//$pass = 'u766613813_sap';
	//$dbname = 'u766613813_sap';
	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'guru';

	$mysqli = new mysqli($host, $user, $pass, $dbname);
	
	if ($mysqli->connect_errno) {
		echo "Error.";
		echo "Error: Failed to make a MySQL connection.\n";
		echo "Error number: " . $mysqli->connect_errno . "\n";
		echo "Error: " . $mysqli->connect_error . "\n";
		exit;
	}
?>