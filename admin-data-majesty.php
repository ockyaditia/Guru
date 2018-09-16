<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'header-grid.php';
		include 'header.php';
		include '_session-admin.php';
	?>
	<script src="js/admin-data-package-grid.js" ></script>
	<!-- [DO NOT DEPLOY] --> <script type="text/javascript">window.onload = function() { editableGrid.onloadHTML("data-grid-data-package"); } </script>
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
		if (isset($_GET['success']) && $_GET['success'] == 1) {
	?>
		<div class="alert alert-success" role="alert">
			<center><strong>Berhasil Tambah Data!</strong></center>
		</div>
	<?php
		} else if (isset($_GET['success']) && $_GET['success'] == 2) {
	?>
		<div class="alert alert-success" role="alert">
			<center><strong>Berhasil Ubah Data!</strong></center>
		</div>
	<?php
		} else if (isset($_GET['success']) && $_GET['success'] == 3) {
	?>
		<div class="alert alert-success" role="alert">
			<center><strong>Berhasil Hapus Data!</strong></center>
		</div>
	<?php
		}
	?>
	
	<?php
		if (isset($_GET['fail'])) {
	?>
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Hapus Data!</strong></center>
		</div>
	<?php
		}
	?>

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Pilih Kedinasan</h3>
                    </div>
                </div>
            </div>
			
			<?php
				$sql_data = "SELECT * FROM majesty_menu";
				
				if (!$result_data = $mysqli->query($sql_data)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
			?>

            <div class="row">
				<!-- Single Blog Area -->
                <div class="col-12 col-md-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="admin-data-majesty-package.php?code=STAN" class="blog-headline">
                                <h4>STAN</h4>
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
					$transition = 250;
					while ($data = $result_data->fetch_assoc()) {
						$code = $data['code'];
						$name = $data['name'];
						$img = $data['img'];
						
						$transition += 250;
				?>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="<?php echo $transition; ?>ms">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="admin-data-majesty-package.php?code=<?php echo $code; ?>" class="blog-headline">
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
		include 'lib-grid.php';
	?>
</body>

</html>