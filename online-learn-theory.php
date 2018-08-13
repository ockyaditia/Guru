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
		$subject = "";
		$class = "";
		if (isset($_GET['subject']) && isset($_GET['class'])) {
			$subject = $_GET['subject'];
			$class = $_GET['class'];
		}
		
		$sql_data = "SELECT * FROM e_book WHERE subject='$subject' AND class='$class'";
		
		if (!$result_data = $mysqli->query($sql_data)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	?>

    <!-- ##### Catagory ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/bg4.jpg);">
        <h3>Penerbit</h3>
    </div>

    <!-- ##### Best Tutors Start ##### -->
    <section class="best-tutors-area section-padding-100" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Pilih Penerbit</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">
						<?php
							while ($data = $result_data->fetch_assoc()) {
								$code = $data['code'];
								$class = $data['class'];
								$subject = $data['subject'];
								$publisher = $data['publisher'];
								$description = $data['description'];
								$file_name = $data['file_name'];
								$img = $data['img'];
						?>
                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
							<a href="online-learn-ebook.php?code=<?php echo $code; ?>">
								<div class="tutor-thumbnail">
									<img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $subject; ?>">
								</div>
							</a>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5><?php echo $subject; ?></h5>
                                <span><?php echo $publisher; ?></span>
                                <p><?php echo $description; ?></p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
						<?php
							}
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Best Tutors End ##### -->

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