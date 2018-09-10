<?php
	$target_dir_video = "../video/";
	
	date_default_timezone_set('Asia/Jakarta');
	$date = date('m/d/Y h:i:s a', time());
	
	$target_file_video = $target_dir_video . basename($_FILES["file_video"]["name"]);
	$videoType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	
	// Check if file already exists
	if (file_exists($target_file)) {
		$error = "Berkas telah terdaftar.";
		header($location.$error);
	}
	
	// Check file size
	/*if ($_FILES["file_video"]["size"] > 50000000) {
		$error = "Ukuran berkas terlalu besar.";
		header($location.$error);
	}*/
	
	// Allow certain file formats
	if ($videoType != "mp4") {
		$error = "Berkas yang bisa diunduh hanya format MP4.";
		header($location.$error);
	}
	
	$extension_file_video = explode(".", $_FILES["file_video"]["name"]);
	$newfilename_video = round(microtime(true)) . '.' . end($extension_file_video);
?>