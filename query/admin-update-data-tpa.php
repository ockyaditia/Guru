<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_POST['code'];
	$code_old = $_POST['code_old'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	
	// Perform an SQL query
	$sql = "UPDATE tpa SET
			code='$code',
			name='$name',
			description='$description'
			WHERE code='$code_old'";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-tpa.php?fail='.$mysqli->errno);
	} else {
		header('location:../admin-data-tpa.php?success=2');
	}
?>