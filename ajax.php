<?php
	require_once("config/config.php");
	
	if (!empty($_POST["question"]) && !empty($_POST["type"])) {
		$result = $mysqli->query("SELECT question FROM " . $_POST["type"] . " WHERE code='" . $_POST["question"] . "'");
		$data = $result->fetch_assoc();
		$question = $data['question'];
		echo $question;
	}
?>