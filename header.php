	<?php
		if (!isset($_SESSION)) { 
			session_start(); 
		}
		require ("config/config.php");
		
		if (isset($_SESSION['email'])) {
			$email = $_SESSION['email'];
			$status = $_SESSION['status'];
			$name = $_SESSION['name'];
			$phoneNumber = $_SESSION['phone_number'];
			$facebook = $_SESSION['facebook'];
			$twitter = $_SESSION['twitter'];
			$instagram = $_SESSION['instagram'];
		}
	?>
	
	<?php
		require ("config/config.php");
		$sql = "SELECT * FROM user_access WHERE status = 'Admin'";
		if (!$result = $mysqli->query($sql)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			exit;
		}
		
		$code_info = "";
		$email_info = "";
		$name_info = "";
		$status_info = "";
		$phone_number_info = "";
		$facebook_info = "";
		$twitter_info = "";
		$instagram_info = "";
		
		while ($data = $result->fetch_assoc()) {
			$code_info = $data['code'];
			$email_info = $data['email'];
			$name_info = $data['name'];
			$status_info = $data['status'];
			$phone_number_info = $data['phone_number'];
			$facebook_info = $data['facebook'];
			$twitter_info = $data['twitter'];
			$instagram_info = $data['instagram'];
		}
	?>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Guru - Pendidikan Cerdas</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="quiz.css">