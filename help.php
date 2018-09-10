<!DOCTYPE html>
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
		if (isset($_GET['fail'])) {
	?>
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Ubah Data!</strong>. Cek Kembali Data!.</center>
		</div>
	<?php
		} else if (isset($_GET['success']) && $_GET['success'] == 2) {
	?>
		<div class="alert alert-success" role="alert">
			<center><strong>Berhasil Ubah Data!</strong></center>
		</div>
	<?php
		}
	?>

    <!-- ##### Regular Page Area Start ##### -->
    <div class="regular-page-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content">
                        <h4>Bantuan</h4>
						<?php
							$sql_data = "SELECT * FROM help";
					
							if (!$result_data = $mysqli->query($sql_data)) {
								$message = "Error.";
								//echo "<script type='text/javascript'>alert('$message');</script>";
							}
							
							$code = '';
							$text = '';
							while ($data = $result_data->fetch_assoc()) {
								$code = $data['code'];
								$text = $data['text'];
							}
							
							if (isset($email) && isset($status) && $status == "Admin") {
						?>
						<form action="query/admin-update-data-help.php" method="post">
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<input type="hidden" id="code_old" name="code_old"  value="<?php echo $code; ?>" required>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<textarea rows="10" cols="50" class="form-control" id="text" name="text" placeholder="Text" required><?php echo $text; ?></textarea>
									</div>
								</div>
								<div class="col-12">
									<button class="btn clever-btn w-100">Ubah</button>
								</div>
							</div>
						</form>
						<?php
							} else {
						?>
                        <p><?php echo $text; ?></p>
						<?php
							}
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Regular Page Area End ##### -->

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