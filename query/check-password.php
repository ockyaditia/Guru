<?php
	if (!empty($_POST["password"]) && !empty($_POST["confirm-password"])) {
		if ($_POST["password"] != $_POST["confirm-password"]) {
			echo "<span style='color:red; font-weight:bold'>&nbsp;&nbsp;Kata Sandi Tidak Sama.</span>";
?>
	<script>
		$("#password").val("");
		$("#confirm-password").val("");
	</script>
<?php
		} else {
			echo "<span style='color:green; font-weight:bold'> &nbsp;&nbsp;Kata Sandi Sama.</span>";
		}
	}
?>