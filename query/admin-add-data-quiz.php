<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_POST['code'];
	$class = $_POST['class'];
	$subject = $_POST['subject'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	$option_a = $_POST['option_a'];
	$option_b = $_POST['option_b'];
	$option_c = $_POST['option_c'];
	$option_d = $_POST['option_d'];
	$option_e = $_POST['option_e'];
	$video = $_POST['video'];
	
	// Perform an SQL query
	$sql = "INSERT INTO quiz(code, class, subject, question, answer, option_a, option_b, option_c, option_d, option_e, video)
			values('$code', '$class', '$subject', '$question', '$answer', '$option_a', '$option_b', '$option_c', '$option_d', '$option_e', '$video')";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-quiz.php?fail='.$mysqli->errno);
	} else {
		header('location:../admin-data-quiz.php?success=1');
	}
?>