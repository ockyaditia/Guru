<?php
	include("../config/config.php");
	include '_session-admin.php';

	$code = $_GET['remove'];
	$subject_code = $_GET['subject_code'];
	
	// Perform an SQL query
	$sql = "DELETE FROM blog WHERE code = '$code'";
	
	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../blog-detail.php?code='.$subject_code.'&fail='.$mysqli->errno);
	} else {
		header('location:../blog-detail.php?code='.$subject_code.'&success=3');
	}
?>