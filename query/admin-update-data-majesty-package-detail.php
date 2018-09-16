<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code_old = $_POST['code_old'];
	$package = $_POST['package'];
	
	// Perform an SQL query
	$sql = "UPDATE majesty_package_detail SET
			package='$package'
			WHERE code='$code_old'";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-majesty-package-detail.php?fail='.$mysqli->errno);
	} else {
		header('location:../admin-data-majesty-package-detail.php?success=2');
	}
?>