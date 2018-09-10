<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$package = $_POST['package'];
	$type = $_POST['type'];
	$question = $_POST['question'];
	
	// Perform an SQL query
	$sql = "INSERT INTO package_list(package, type, question)
			values('$package', '$type', '$question')";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-package-list.php?add='.$package.'&fail='.$mysqli->errno);
	} else {
		header('location:../admin-data-package-list.php?add='.$package.'&success=1');
	}
?>