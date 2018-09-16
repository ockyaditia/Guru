<?php
	require_once("config/config.php");
	
	if (!empty($_POST["code"]) && !empty($_POST["code_old"])) {
		$result = $mysqli->query("SELECT count(*) FROM majesty_question WHERE code='" . $_POST["code"] . "' AND code!='" . $_POST["code_old"] . "'");
		$data = $result->fetch_assoc();
		$user_count = $data['count(*)'];
		if ($user_count > 0) {
			echo "<span style='color:red; font-weight:bold'>&nbsp;&nbsp;Kode Tidak Tersedia.</span>";
?>
	<script>
		$("#code").val("");
	</script>
<?php
		} else {
			echo "<span style='color:green; font-weight:bold'> &nbsp;&nbsp;Kode Tersedia.</span>";
		}
	}
?>