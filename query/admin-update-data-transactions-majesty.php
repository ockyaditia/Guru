<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_GET['update'];
	$approval = $_GET['approval'];
	
	// Perform an SQL query
	$sql = "UPDATE transactions_majesty SET approval = '$approval' WHERE code = '$code'";
	
	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-data-transactions-majesty.php?fail='.$mysqli->errno);
	} else {
		header('location:../admin-data-transactions-majesty.php?success=2');
	}
?>