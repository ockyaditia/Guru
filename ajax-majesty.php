<?php
	require_once("config/config.php");
	
	if (!empty($_POST["question"])) {
		$result = $mysqli->query("SELECT question FROM majesty_question WHERE code='" . $_POST["question"] . "'");
		$data = $result->fetch_assoc();
		$question = $data['question'];
		echo $question;
	}
?>