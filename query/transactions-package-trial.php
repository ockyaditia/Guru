<?php
	include("../config/config.php");
	
	$user_code = $_POST['user_code'];
	$package_code = $_POST['package_code'];
	$approval = 3;
	$timestamp = round(microtime(true));
	
	// Perform an SQL query
	$sql = "INSERT INTO transactions_package(user_code, package_code, approval, timestamp)
			values('$user_code', '$package_code', '$approval', '$timestamp')";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../transactions-package.php?package_code='.$package_code.'&fail='.$mysqli->errno);
	} else {
		header('location:../online-learn-college-package.php?code='.$package_code.'&success=1');
	}
?>