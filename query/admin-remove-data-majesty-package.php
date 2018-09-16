<?php
	include("../config/config.php");
	include '_session-admin.php';

	$code = $_GET['remove'];
	
	$sql_select = "SELECT subject FROM majesty_package WHERE code = '$code'";
	
	if (!$result_select = $mysqli->query($sql_select)) {
		$message = "Error.";
		//echo "<script type='text/javascript'>alert('$message');</script>";
		exit;
	}
	
	while ($data_select = $result_select->fetch_assoc()) {
		$subject = $data_select['subject'];
	}
	
	// Perform an SQL query
	$sql = "DELETE FROM majesty_package WHERE code = '$code'";
	
	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-data-majesty-package.php?code='.$subject.'&fail='.$mysqli->errno);
	} else {
		header('location:../admin-data-majesty-package.php?code='.$subject.'&success=3');
	}
?>