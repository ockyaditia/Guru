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
		$package_code = "";
		if (isset($_GET['package_code'])) {
			$package_code = $_GET['package_code'];
		}
		
		$sql_data = "SELECT * FROM payment";
		
		if (!$result_data = $mysqli->query($sql_data)) {
			$message = "Error.";
			//echo "<script type='text/javascript'>alert('$message');</script>";
		}
	?>

    <!-- ##### Catagory ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/bg4.jpg);">
        <h3>Pembayaran</h3>
    </div>

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Pilih Pembayaran</h3>
                    </div>
                </div>
            </div>

            <div class="row">
				<?php
					$transition = 0;
					while ($data = $result_data->fetch_assoc()) {
						$code = $data['code'];
						$bank_name = $data['bank_name'];
						$account_name = $data['account_name'];
						$account_number = $data['account_number'];
						$img = $data['img'];
						
						$transition += 250;
				?>
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="<?php echo $transition; ?>ms">
                        <img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $account_name; ?>">
                        <!-- Course Content -->
                        <div class="course-content">
                            <a href="#"><h4><?php echo $bank_name; ?></h4></a>
                            <div class="meta d-flex align-items-center">
                                <a href="#"><?php echo $account_name; ?></a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#"><?php echo $account_number; ?></a>
                            </div>
                            <!--<p><?php //echo $bank_name; ?></p>-->
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <!--<div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> <?php //echo $seat; ?>
                                </div>-->
                                <!--<div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 5
                                </div>-->
                            </div>
                            <div class="course-fee h-100">
                                <a href="transactions-majesty-package.php?package_code=<?php echo $package_code; ?>&payment_code=<?php echo $code; ?>">Bayar</a>
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
    <!-- ##### Popular Courses End ##### -->

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