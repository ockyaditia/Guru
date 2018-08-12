<?php
	if (!isset($status) || empty($status)) {
		header('location:index.php');
	} else if ($status != "Admin") {
		header('location:index.php');
	}
?>