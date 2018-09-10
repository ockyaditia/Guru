<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_POST['code'];
	$subject = $_POST['subject'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	$option_a = $_POST['option_a'];
	$option_b = $_POST['option_b'];
	$option_c = $_POST['option_c'];
	$option_d = $_POST['option_d'];
	$option_e = $_POST['option_e'];
	
	$location = "location:../admin-add-data-tpa-question.php?fail-message=";
	
	include 'upload-file-package.php';
	include 'upload-video-package.php';
	
	// Perform an SQL query
	$sql = "INSERT INTO tpa_question(code, subject, question, answer, option_a, option_b, option_c, option_d, option_e, book, video)
			values('$code', '$subject', '$question', '$answer', '$option_a', '$option_b', '$option_c', '$option_d', '$option_e', '$newfilename_pdf', '$newfilename_video')";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-tpa-question.php?fail='.$mysqli->errno);
	} else {
		if (!move_uploaded_file($_FILES["file_book"]["tmp_name"], $target_dir_pdf . $newfilename_pdf)) {
			$error = "Ada sesuatu yang gagal dalam unduh berkas pdf.";
			header($location.$error);
		}
		if (!move_uploaded_file($_FILES["file_video"]["tmp_name"], $target_dir_video . $newfilename_video)) {
			$error = "Ada sesuatu yang gagal dalam unduh berkas video.";
			header($location.$error);
		}
		header('location:../admin-data-tpa-question.php?success=1');
	}
?>