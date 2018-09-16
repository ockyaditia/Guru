<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$package = $_POST['package'];
	$question = $_POST['question'];
	
	// Perform an SQL query
	$sql = "INSERT INTO majesty_package_list(package, question)
			values('$package', '$question')";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-majesty-package-list.php?add='.$package.'&fail='.$mysqli->errno);
	} else {
		header('location:../admin-data-majesty-package-list.php?add='.$package.'&success=1');
	}
?>