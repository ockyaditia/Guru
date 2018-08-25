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
		$sql_data = "SELECT * FROM learning_level_menu";
		
		if (!$result_data = $mysqli->query($sql_data)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	?>

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/bg4.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Jenjang Pembelajaran</h2>
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
                        <h3 style="background-color:#FFFF00;"><i>#LearnIsGrace</i></h3>
						<br>
                        <h6>Tingkatan jenjang pembelajaran yang bisa kamu pilih sesuai jenjang kamu.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
				<?php
					$transition = 0;
					while ($data = $result_data->fetch_assoc()) {
						$code = $data['code'];
						$name = $data['name'];
						$img = $data['img'];
						
						$transition += 250;
				?>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="<?php echo $transition; ?>ms">
                        <img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $name; ?>">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="
							<?php
								if ($name == 'Umum') {
									echo 'online-learn.php';
								} else {
									echo '#';
								}
							?>
							" class="blog-headline">
                                <h4><?php echo $name; ?></h4>
                            </a>
                            <!--<div class="meta d-flex align-items-center">
                                <a href="#"><?php echo ''; ?></a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#"><?php echo ''; ?></a>
                            </div>
                            <p><?php echo ''; ?></p>-->
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