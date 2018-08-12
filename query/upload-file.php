<?php
	$target_dir_pdf = "../pdf/";
	
	date_default_timezone_set('Asia/Jakarta');
	$date = date('m/d/Y h:i:s a', time());
	
	$target_file_pdf = $target_dir_pdf . basename($_FILES["file_name"]["name"]);
	$pdfType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	
	// Check if file already exists
	if (file_exists($target_file)) {
		$error = "Berkas telah terdaftar.";
		header($location.$error);
	}
	
	// Check file size
	/*if ($_FILES["file_name"]["size"] > 50000000) {
		$error = "Ukuran berkas terlalu besar.";
		header($location.$error);
	}*/
	
	// Allow certain file formats
	if ($pdfType != "pdf") {
		$error = "Berkas yang bisa diunduh hanya format PDF.";
		header($location.$error);
	}
	
	$extension_file_pdf = explode(".", $_FILES["file_name"]["name"]);
	$newfilename_pdf = round(microtime(true)) . '.' . end($extension_file_pdf);
?>