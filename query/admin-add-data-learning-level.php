<?php
	include("../config/config.php");
	include '../_session-admin.php';
	
	$code = $_POST['code'];
	$name = $_POST['name'];
	$class = $_POST['class'];
	$age = $_POST['age'];
	$description = $_POST['description'];
	
	$location = "location:../admin-add-data-learning-level.php?fail-message=";
	
	include 'upload.php';
	
	// Perform an SQL query
	$sql = "INSERT INTO learning_level(code, name, class, age, description, img)
			values('$code', '$name', '$class', '$age', '$description', '$newfilename')";

	if (!$result = $mysqli->query($sql)) {
		// Oh no! The query failed. 
		echo "Error.";

		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Query" . $sql . "\n";
		echo "Error Number: " . $mysqli->errno . "\n";
		echo "Error Detail: " . $mysqli->error . "\n";
		header('location:../admin-add-data-learning-level.php?fail='.$mysqli->errno);
	} else {
		if (!move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir . $newfilename)) {
			$error = "Ada sesuatu yang gagal dalam unduh gambar.";
			header($location.$error);
		}
		header('location:../admin-data-learning-level.php?success=1');
	}
?>