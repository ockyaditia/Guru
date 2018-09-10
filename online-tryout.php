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
		$sql = "SELECT * FROM background WHERE code='ONLINE_TRYOUT'";
		
		if (!$result = $mysqli->query($sql)) {
			$message = "Error.";
			//echo "<script type='text/javascript'>alert('$message');</script>";
		}
	
		while ($data = $result->fetch_assoc()) {
			$code_background = $data['code'];
			$img = $data['img'];
		}
	?>

    <!-- ##### Hero Area Start ##### -->
    <section id="background_image_change" class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/<?php echo $img; ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Tryout Online</h2>
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

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3 style="background-color:#77ec20;"><i>#LearnIsChallenge</i></h3>
						<br>
                        <h6>Dengan soal-soal yang bisa kamu kerjakan langsung.</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

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