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
		$sql = "SELECT * FROM info";
		if (!$result = $mysqli->query($sql)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			exit;
		}
		
		while ($data = $result->fetch_assoc()) {
			$code_info = htmlentities($data['code']);
			$email_info = htmlentities($data['email']);
			$phone_info = htmlentities($data['phone']);
			$facebook_info = htmlentities($data['facebook']);
			$twitter_info = htmlentities($data['twitter']);
			$instagram_info = htmlentities($data['instagram']);
		}
	?>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
	
	<?php
		$sql = "SELECT * FROM logo";
		if (!$result = $mysqli->query($sql)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			exit;
		}
		
		$logo_name = "";
		$logo_size = "";
		$logo_img = "";
		
		while ($data = $result->fetch_assoc()) {
			$logo_name = htmlentities($data['name']);
			$logo_size = $data['size'];
			$logo_img = $data['img'];
		}
	?>
	
    <title><?php echo $logo_name; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/<?php echo $logo_img; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="quiz.css">