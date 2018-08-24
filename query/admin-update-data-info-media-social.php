<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code_old = $_POST['code_old'];
	$facebook = $_POST['facebook'];
	$instagram = $_POST['instagram'];
	$twitter = $_POST['twitter'];
	
	// Perform an SQL query
	$sql = "UPDATE info SET
			facebook='$facebook',
			instagram='$instagram',
			twitter='$twitter'
			WHERE code='$code_old'";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../about-us.php?fail='.$mysqli->errno);
	} else {
		header('location:../about-us.php?success=2');
	}
?>