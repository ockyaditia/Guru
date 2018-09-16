<!DOCTYPE html>
<?php
	session_start();
	require ("config/config.php");
	
	if (!isset($_SESSION['code'])) {
		header('location:login.php');
	}
?>
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
		$sql_data = "SELECT * FROM majesty_package";
		
		if (!$result_data = $mysqli->query($sql_data)) {
			$message = "Error.";
			//echo "<script type='text/javascript'>alert('$message');</script>";
		}
	?>
	
	<?php
		$sql = "SELECT * FROM background WHERE code='ONLINE_LEARN_COLLEGE_EXAM'";
		
		if (!$result = $mysqli->query($sql)) {
			$message = "Error.";
			//echo "<script type='text/javascript'>alert('$message');</script>";
		}
	
		while ($data = $result->fetch_assoc()) {
			$code_background = $data['code'];
			$img = $data['img'];
		}
	?>
	
	<?php
		if (isset($_GET['code'])) {
			$code_package = $_GET['code'];
			
			$sql = "SELECT * FROM majesty_package_detail";
			if (!$result = $mysqli->query($sql)) {
				$message = "Error.";
				//echo "<script type='text/javascript'>alert('$message');</script>";
				exit;
			}
			
			while ($data = $result->fetch_assoc()) {
				$package_num = $data['package'];
			}
			
			$sql = "SELECT * FROM majesty_package WHERE code = '$code_package'";
			if (!$result = $mysqli->query($sql)) {
				$message = "Error.";
				//echo "<script type='text/javascript'>alert('$message');</script>";
				exit;
			}
			
			while ($data = $result->fetch_assoc()) {
				$package_code = $data['code'];
				$package_name = $data['name'];
				$package_description = $data['description'];
				$package_detail = $data['detail'];
				$package_price = $data['price'];
				$package_duration = $data['duration'];
				$package_package = $data['package'] * $package_num;
			}
		}
		
		$code = $_SESSION['code'];
		
		$sql = "SELECT *, count(*) FROM transactions_majesty WHERE user_code='$code' AND package_code='$package_code'";
		
		if (!$result = $mysqli->query($sql)) {
			$message = "Error.";
			//echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		$data = $result->fetch_assoc();
		$count = $data['count(*)'];
		$approval = $data['approval'];
	?>

    <!-- ##### Hero Area Start ##### -->
    <section id="background_image_change" class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/<?php echo $img; ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2><?php echo $package_name; ?></h2>
						<?php
							if (isset($email) && isset($status) && $status == "Admin") {
						?>
							<br>
							<br>
							<form action="query/admin-update-data-background.php" method="post" enctype="multipart/form-data">
								<input type="hidden" id="code" name="code" value="<?php echo $code_background; ?>" required>
								<label class="clever-btn reg"> Pilih Gambar
									<input type="file" id="img" name="img" accept="image/*" onchange="loadFileBackground(event)" style="display: none;">
								</label>
								<button class="clever-btn w-100 reg">Ubah</button>
							</form>
							<script>
								var loadFileBackground = function(event) {
									var output = document.getElementById('background_image_change');
									var file = event.target.files[0];
									output.style.backgroundImage = "url(img/bg-img/" + file.name + ")";
								};
							</script>
						<?php
							}
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3><i>Deskripsi Paket</i></h3>
						<br>
                        <h6><?php echo $package_description; ?></h6>
                        <h6><?php echo $package_detail; ?></h6>
                    </div>
                </div>
            </div>

            <div class="row">
				<!-- ##### Single Course Intro Start ##### -->
				<div id="background_image_change" class="single-course-intro d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/<?php echo $img; ?>);">
					<!-- Content -->
					<div class="single-course-intro-content text-center">
						<!-- Ratings -->
						<!--<div class="ratings">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>-->
						<h5>Harga: Rp. <?php echo $package_price; ?>,-</h5><br>
						<div class="meta d-flex align-items-center justify-content-center">
							<p>Durasi: <?php echo $package_duration; ?> Bulan<br>
							Jumlah Paket Soal: <?php echo $package_package; ?> Soal</p>
						</div>
						<!--<div class="price">Beri Bintang</div>-->
						<?php
							if (isset($email) && isset($status) && $status == "Admin") {
						?>
							<br>
							<br>
							<a href="online-learn-stan-package.php?code=<?php echo $package_code; ?>"><button class="clever-btn w-100 reg">
							<?php
								if ($count == 0)
									echo "Bayar";
								else if ($approval != 3)
									echo "Cek Pembayaran";
								else
									echo "Mulai";
							?>
							</button></a>
						<?php
							}
						?>
					</div>
				</div>
				<!-- ##### Single Course Intro End ##### -->
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->
	
	<br>
	<br>
	<br>
	<br>
	<br>

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