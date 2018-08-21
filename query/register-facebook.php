<?php
	include("../config/config.php");
	session_start();
	
	$code = $_POST['code'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$status = "Pelajar";
	$facebook = $_POST['facebook'];
	
	$sql_select = "SELECT count(*) FROM user_access WHERE code = '$code'";
	
	if (!$result_select = $mysqli->query($sql_select)) {
		$message = "Error.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	
	$data_select = $result_select->fetch_assoc();
	$count = $data_select['count(*)'];
	
	if ($count == 0) {
		// Perform an SQL query
		$sql = "INSERT INTO user_access(code, email, name, status, facebook)
				values('$code', '$email', '$name', '$status', '$facebook')";
	} else {
		// Perform an SQL query
		$sql = "REPLACE INTO user_access(code, email, name, status, facebook)
				values('$code', '$email', '$name', '$status', '$facebook')";
	}

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../register?fail='.$mysqli->errno);
	} else {
		$_SESSION['code'] = $code;
		$_SESSION['email'] = $email;
		$_SESSION['status'] = $status;
		$_SESSION['name'] = $name;
		$_SESSION['phone_number'] = "";
		$_SESSION['facebook'] = $facebook;
		$_SESSION['twitter'] = "";
		$_SESSION['instagram'] = "";
		header('location:../index.php?success=1');
	}
?>