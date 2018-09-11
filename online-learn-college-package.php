<!DOCTYPE html>
<?php
	session_start();
	require ("config/config.php");
	
	$package_code = "";
	if (isset($_GET['code'])) {
		$package_code = $_GET['code'];
	
		if (!isset($_SESSION['code'])) {
			header('location:login.php');
		}
		
		$code = $_SESSION['code'];
		
		$sql = "SELECT *, count(*) FROM transactions_package WHERE user_code='$code' AND package_code='$package_code'";
		
		if (!$result = $mysqli->query($sql)) {
			$message = "Error.";
			//echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		$data = $result->fetch_assoc();
		$count = $data['count(*)'];
		$approval = $data['approval'];
		
		if ($count == 0) {
			if (strpos($package_code, 'TRIAL') !== false)
				header('location:transactions-package.php?package_code='.$package_code);
			else
				header('location:payment-package.php?package_code='.$package_code);
		} else {
			if ($approval != 3) {
				header('location:transactions-package.php?package_code='.$package_code);
			}
		} 
	}
?>
<html lang="en">

<head>
	<?php
		include 'header.php';
	?>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <?php
			include 'body-header.php';
		?>
        <!-- Navbar Area -->
        <?php
			include 'body-menu.php';
		?>
    </header>
    <!-- ##### Header Area End ##### -->
	
	<?php
		$sql_data = "SELECT * FROM package";
		
		if (!$result_data = $mysqli->query($sql_data)) {
			$message = "Error.";
			//echo "<script type='text/javascript'>alert('$message');</script>";
		}
	?>
	
	<?php
		$sql = "SELECT * FROM background WHERE code='ONLINE_LEARN_COLLEGE_EXAM'";
		
		if (!$result = $mysqli->query($sql)) {
			$message = "Error.";
			//echo "<script type='text/javascript'>alert('$message');</script>";
		}
	
		while ($data = $result->fetch_assoc()) {
			$code_background = $data['code'];
			$img = $data['img'];
		}
	?>
	
	<?php
		if (isset($_GET['code'])) {
			$code_package = $_GET['code'];
			
			$sql = "SELECT * FROM package_detail";
			if (!$result = $mysqli->query($sql)) {
				$message = "Error.";
				//echo "<script type='text/javascript'>alert('$message');</script>";
				exit;
			}
			
			while ($data = $result->fetch_assoc()) {
				$package_num = $data['package'];
			}
			
			$sql = "SELECT * FROM package WHERE code = '$code_package'";
			if (!$result = $mysqli->query($sql)) {
				$message = "Error.";
				//echo "<script type='text/javascript'>alert('$message');</script>";
				exit;
			}
			
			while ($data = $result->fetch_assoc()) {
				$package_code = $data['code'];
				$package_name = $data['name'];
				$package_description = $data['description'];
				$package_detail = $data['detail'];
				$package_price = $data['price'];
				$package_duration = $data['duration'];
				$package_package = $data['package'] * $package_num;
			}
		}
	?>

	

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <?php
			include 'body-top-footer.php';
		?>
        <!-- Bottom Footer Area -->
        <?php
			include 'body-bottom-footer.php';
		?>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
	<?php
		include 'lib.php';
	?>
</body>

</html>