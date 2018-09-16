<?php
	include("../config/config.php");
	include '_session-admin.php';

	$code = $_GET['remove'];
	
	$sql_data = "SELECT * FROM majesty_package_list WHERE code = '$code'";
				
	if (!$result_data = $mysqli->query($sql_data)) {
		$message = "Error.";
		//echo "<script type='text/javascript'>alert('$message');</script>";
	}
	
	while ($data = $result_data->fetch_assoc()) {
		$package = $data['package'];
	}
	
	// Perform an SQL query
	$sql = "DELETE FROM majesty_package_list WHERE code = '$code'";
	
	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-data-majesty-package-list.php?add='.$package.'&fail='.$mysqli->errno);
	} else {
		header('location:../admin-data-majesty-package-list.php?add='.$package.'&success=3');
	}
?>