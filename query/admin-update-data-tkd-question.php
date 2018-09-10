<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_POST['code'];
	$code_old = $_POST['code_old'];
	$subject = $_POST['subject'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	$option_a = $_POST['option_a'];
	$option_b = $_POST['option_b'];
	$option_c = $_POST['option_c'];
	$option_d = $_POST['option_d'];
	$option_e = $_POST['option_e'];
	
	$location = "location:../admin-update-data-tkd-question.php?fail-message=";
	
	include 'upload-file-package.php';
	include 'upload-video-package.php';
	
	if (basename($_FILES["file_book"]["name"]) == "" && basename($_FILES["file_video"]["name"]) == "") {
		// Perform an SQL query
		$sql = "UPDATE tkd_question SET
				code='$code',
				subject='$subject',
				question='$question',
				answer='$answer',
				option_a='$option_a',
				option_b='$option_b',
				option_c='$option_c',
				option_d='$option_d',
				option_e='$option_e'
				WHERE code='$code_old'";
	} else if (basename($_FILES["file_book"]["name"]) != "" && basename($_FILES["file_video"]["name"]) != "") {
		// Perform an SQL query
		$sql = "UPDATE tkd_question SET
				code='$code',
				subject='$subject',
				question='$question',
				answer='$answer',
				option_a='$option_a',
				option_b='$option_b',
				option_c='$option_c',
				option_d='$option_d',
				option_e='$option_e',
				book='$newfilename_pdf',
				video='$newfilename_video'
				WHERE code='$code_old'";
	} else if (basename($_FILES["file_book"]["name"]) == "") {
		// Perform an SQL query
		$sql = "UPDATE tkd_question SET
				code='$code',
				subject='$subject',
				question='$question',
				answer='$answer',
				option_a='$option_a',
				option_b='$option_b',
				option_c='$option_c',
				option_d='$option_d',
				option_e='$option_e',
				video='$newfilename_video'
				WHERE code='$code_old'";
	} else if (basename($_FILES["file_video"]["name"]) == "") {
		// Perform an SQL query
		$sql = "UPDATE tkd_question SET
				code='$code',
				subject='$subject',
				question='$question',
				answer='$answer',
				option_a='$option_a',
				option_b='$option_b',
				option_c='$option_c',
				option_d='$option_d',
				option_e='$option_e',
				book='$newfilename_pdf'
				WHERE code='$code_old'";
	}

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-tkd-question.php?fail='.$mysqli->errno);
	} else {
		if (basename($_FILES["file_book"]["name"]) != "" && basename($_FILES["file_video"]["name"]) != "") {
			if (!move_uploaded_file($_FILES["file_book"]["tmp_name"], $target_dir . $newfilename_video)) {
				$error = "Ada sesuatu yang gagal dalam unduh pdf.";
				header($location.$error);
			}
			if (!move_uploaded_file($_FILES["file_video"]["tmp_name"], $target_dir_pdf . $newfilename_pdf)) {
				$error = "Ada sesuatu yang gagal dalam unduh video.";
				header($location.$error);
			}
		} else if (basename($_FILES["file_book"]["name"]) == "") {
			if (!move_uploaded_file($_FILES["file_video"]["tmp_name"], $target_dir_pdf . $newfilename_pdf)) {
				$error = "Ada sesuatu yang gagal dalam unduh video.";
				header($location.$error);
			}
		} else if (basename($_FILES["file_video"]["name"]) == "") {
			if (!move_uploaded_file($_FILES["file_book"]["tmp_name"], $target_dir . $newfilename_video)) {
				$error = "Ada sesuatu yang gagal dalam unduh pdf.";
				header($location.$error);
			}
		}
		header('location:../admin-data-tkd-question.php?success=2');
	}
?>