<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_POST['code'];
	$class = $_POST['class'];
	$subject = $_POST['subject'];
	$publisher = $_POST['publisher'];
	$description = $_POST['description'];
	
	$location = "location:../admin-add-data-video.php?fail-message=";
	
	include 'upload-video.php';
	
	// Perform an SQL query
	$sql = "INSERT INTO video(code, class, subject, publisher, description, file_name)
			values('$code', '$class', '$subject', '$publisher', '$description', '$newfilename_video')";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-video.php?fail='.$mysqli->errno);
	} else {
		if (!move_uploaded_file($_FILES["file_name"]["tmp_name"], $target_dir_video . $newfilename_video)) {
			$error = "Ada sesuatu yang gagal dalam unduh berkas.";
			header($location.$error);
		}
		header('location:../admin-data-video.php?success=1');
	}
?>