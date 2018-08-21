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

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Single Course Intro Start ##### -->
    <div class="single-course-intro d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg1.jpg);">
        <!-- Content -->
        <div class="single-course-intro-content text-center">
			<div class="userthumb">
				<img src="img/bg-img/t-unknown.png" alt="">
			</div>
            <h3><?php echo $_SESSION['name']; ?></h3>
            <h5>Status: <?php echo $_SESSION['status']; ?></h5>
			<br>
            <h4><?php echo $_SESSION['email']; ?></h4>
            <h4><?php echo $_SESSION['phone_number']; ?></h4>
			<br>
            <div class="meta d-flex align-items-center justify-content-center">
                <a href="<?php echo $_SESSION['facebook']; ?>">Facebook</a>
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="<?php echo $_SESSION['instagram']; ?>">Instagram</a>
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="<?php echo $_SESSION['twitter']; ?>">Twitter</a>
            </div>
        </div>
    </div>
    <!-- ##### Single Course Intro End ##### -->

    <!-- ##### Courses Content Start ##### -->
    <div class="single-course-content section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="course--content">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Courses Content End ##### -->

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