<?php
	$target_dir = "../img/core-img/";
	
	date_default_timezone_set('Asia/Jakarta');
	$date = date('m/d/Y h:i:s a', time());
	
	$target_file = $target_dir . basename($_FILES["img"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	
	$check = getimagesize($_FILES["img"]["tmp_name"]);
	
	if ($check === false) {
		$error = "Berkas teridentifikasi bukan gambar.";
		header($location.$error);
	}
	
	// Check if file already exists
	if (file_exists($target_file)) {
		$error = "Gambar telah terdaftar.";
		header($location.$error);
	}
	
	// Check file size
	/*if ($_FILES["img"]["size"] > 50000000) {
		$error = "Ukuran gambar terlalu besar.";
		header($location.$error);
	}*/
	
	// Allow certain file formats
	if ($imageFileType != "ico") {
		$error = "Gambar yang bisa diunduh hanya format ICO.";
		header($location.$error);
	}
	
	$extension_file = explode(".", $_FILES["img"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($extension_file);
?>