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
		$code = "";
		if (isset($_GET['code'])) {
			$code = $_GET['code'];
		}
		
		$sql_data = "SELECT * FROM e_book WHERE code='$code'";
		
		if (!$result_data = $mysqli->query($sql_data)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		while ($data = $result_data->fetch_assoc()) {
			$code = $data['code'];
			$class = $data['class'];
			$subject = $data['subject'];
			$publisher = $data['publisher'];
			$description = $data['description'];
			$file_name = $data['file_name'];
			$img = $data['img'];
		}
	?>
	
	<?php
		$sql_background = "SELECT * FROM background WHERE code='ONLINE_LEARN'";
		
		if (!$result_background = $mysqli->query($sql_background)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	
		while ($data_background = $result_background->fetch_assoc()) {
			$code_background = $data_background['code'];
			$img = $data_background['img'];
		}
	?>

    <!-- ##### Catagory ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/<?php echo $img; ?>);">
        <h3>E-Book</h3>
    </div>

    <!-- ##### Best Tutors Start ##### -->
    <section class="best-tutors-area section-padding-100" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>E-Book</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
					<embed src="pdf/<?php echo $file_name; ?>" width="100%" height="1160px" />
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Best Tutors End ##### -->
	
	<!-- ##### Best Tutors Start ##### -->
    <section class="best-tutors-area section-padding-100" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Video Pembelajaran</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">
					
					<?php
						$sql_data = "SELECT * FROM video WHERE class='$class' AND subject='$subject'";
						
						if (!$result_data = $mysqli->query($sql_data)) {
							$message = "Error.";
							echo "<script type='text/javascript'>alert('$message');</script>";
						}
						
						while ($data = $result_data->fetch_assoc()) {
							$code = $data['code'];
							$class = $data['class'];
							$subject = $data['subject'];
							$publisher = $data['publisher'];
							$description = $data['description'];
							$file_name = $data['file_name'];
					?>
                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
							<a href="online-learn-video.php?code=<?php echo $code; ?>">
								<video width="100%" height="200px">
									<source src="video/<?php echo $file_name; ?>" type="video/mp4">
									Browser anda tidak mendukung pemutar video.
								</video>
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