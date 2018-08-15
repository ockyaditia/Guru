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
		$category = "";
		if (isset($_GET['category'])) {
			$category = $_GET['category'];
		}
		
		$sql_data = "SELECT * FROM subjects WHERE class='$category'";
		
		if (!$result_data = $mysqli->query($sql_data)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	?>

    <!-- ##### Catagory ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/bg4.jpg);">
        <h3>Mata Pelajaran</h3>
    </div>

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Pilih Mata Pelajaran</h3>
                    </div>
                </div>
            </div>

            <div class="row">
				<?php
					$transition = 0;
					while ($data = $result_data->fetch_assoc()) {
						$code = $data['code'];
						$name = $data['name'];
						$class = $data['class'];
						$category = $data['category'];
						$description = $data['description'];
						$seat = $data['seat'];
						$price = $data['price'];
						$img = $data['img'];
						
						$transition += 250;
				?>
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="<?php echo $transition; ?>ms">
                        <img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $name; ?>">
                        <!-- Course Content -->
                        <div class="course-content">
                            <a href="online-learn-theory.php?code=<?php echo $code; ?>&subject=<?php echo $name; ?>&class=<?php echo $class; ?>"><h4><?php echo $name; ?></h4></a>
                            <div class="meta d-flex align-items-center">
                                <a href="#"><?php echo $class; ?></a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#"><?php echo $category; ?></a>
                            </div>
                            <p><?php echo $description; ?></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> <?php echo $seat; ?>
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