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

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area blog-page section-padding-100">
        <div class="container-fluid">
            <!--<div class="row">
                <div class="col-12">
                    <div class="blog-catagories mb-70 d-flex flex-wrap justify-content-between">

                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc1.jpg);">
                            <a href="#">
                                <h6>Beranda</h6>
                            </a>
                        </div>

                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc2.jpg);">
                            <a href="#">
                                <h6>Konsep Pelajaran</h6>
                            </a>
                        </div>

                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc3.jpg);">
                            <a href="#">
                                <h6>Ujian Nasional</h6>
                            </a>
                        </div>

                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc4.jpg);">
                            <a href="#">
                                <h6>SBMPTN</h6>
                            </a>
                        </div>

                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc5.jpg);">
                            <a href="#">
                                <h6>Siap Kuliah</h6>
                            </a>
                        </div>

                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc6.jpg);">
                            <a href="#">
                                <h6>Tips Belajar</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>-->

            <div class="row">
				<?php
					$sql_data = "SELECT * FROM subjects";
					
					if (!$result_data = $mysqli->query($sql_data)) {
						$message = "Error.";
						//echo "<script type='text/javascript'>alert('$message');</script>";
					}
					
					$transition = 0;
					while ($data = $result_data->fetch_assoc()) {
						$code = htmlentities($data['code']);
						$name = htmlentities($data['name']);
						$class = htmlentities($data['class']);
						$category = htmlentities($data['category']);
						$description = htmlentities($data['description']);
						$seat = htmlentities($data['seat']);
						$price = htmlentities($data['price']);
						$img = htmlentities($data['img']);
						
						$transition += 250;
				?>
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="<?php echo $transition; ?>ms">
                        <img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $name; ?>">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="blog-detail.php?code=<?php echo $code; ?>" class="blog-headline">
                                <h4><?php echo $name; ?></h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#"><?php echo $class; ?></a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#"><?php echo $category; ?></a>
                            </div>
                            <p><?php echo $description; ?></p>
                        </div>
                    </div>
                </div>
				<?php
					}
				?>		
            </div>

            <!--<div class="row">
                <div class="col-12">
                    <div class="load-more text-center mt-100 wow fadeInUp" data-wow-delay="1000ms">
                        <a href="#" class="btn clever-btn btn-2">Lebih Banyak</a>
                    </div>
                </div>
            </div>-->
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