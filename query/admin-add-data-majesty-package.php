<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_POST['code'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$description = $_POST['description'];
	$detail = $_POST['detail'];
	$price = $_POST['price'];
	$duration = $_POST['duration'];
	$package = $_POST['package'];
	
	// Perform an SQL query
	$sql = "INSERT INTO majesty_package(code, name, subject, description, detail, price, duration, package)
			values('$code', '$name', '$subject', '$description', '$detail', '$price', '$duration', '$package')";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-majesty-package.php?code='.$subject.'&fail='.$mysqli->errno);
	} else {
		header('location:../admin-data-majesty-package.php?code='.$subject.'&success=1');
	}
?>