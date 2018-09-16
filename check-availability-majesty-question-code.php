<?php
	require_once("config/config.php");
	
	if (!empty($_POST["code"])) {
		$result = $mysqli->query("SELECT count(*) FROM majesty_question WHERE code='" . $_POST["code"] . "'");
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