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
		$sql_data = "SELECT * FROM majesty_package WHERE subject='STAN'";
		
		if (!$result_data = $mysqli->query($sql_data)) {
			$message = "Error.";
			//echo "<script type='text/javascript'>alert('$message');</script>";
		}
	?>
	
	<?php
		$sql = "SELECT * FROM background WHERE code='ONLINE_LEARN_STAN'";
		
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
                        <h2>STAN</h2>
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
                        <h3 style="background-color:#ff288d;"><i>#LearnIsSimple</i></h3>
						<br>
                        <h6>Memahami materi pelajaran jadi lebih mudah dengan materi dan video menarik yang bisa kamu pelajari. Ribuan video belajar tersedia buat kamu.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
				<?php
					$transition = 0;
					while ($data = $result_data->fetch_assoc()) {
						$code = $data['code'];
						$name = $data['name'];
						$description = $data['description'];
						$detail = $data['detail'];
						$price = $data['price'];
						$duration = $data['duration'];
						
						$transition += 250;
				?>
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="<?php echo $transition; ?>ms">
                        <img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $name; ?>">
                        <!-- Course Content -->
                        <div class="course-content">
                            <a href="online-learn-stan-category.php?code=<?php echo $code; ?>"><h4><?php echo $name; ?></h4></a>
                            <div class="meta d-flex align-items-center">
                            </div>
                            <p><?php echo $description; ?></p>
                            <p><?php echo $detail; ?></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <!--<i class="fa fa-user" aria-hidden="true"></i>--> <?php echo $duration; ?> Bulan Langganan
                                </div>
                                <!--<div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 5
                                </div>-->
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free"><?php echo $price; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
					}
				?>
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