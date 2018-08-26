<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$name = $_POST['name'];
	$subject_code = $_POST['subject_code'];
	$email = $_POST['email'];
	date_default_timezone_set('Asia/Jakarta');
	$date = date('d-m-Y');
	$comment = $_POST['comment'];
	
	// Perform an SQL query
	$sql = "INSERT INTO blog(name, subject_code, email, date, comment)
			values('$name', '$subject_code', '$email', '$date', '$comment')";

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
		header('location:../blog-detail.php?code='.$subject_code.'&success=1');
	}
?>