<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'header.php';
		
		if (isset($_GET['success'])) {
			echo "<script type='text/javascript'>alert('Anda berhasil Masuk, Selamat Datang di Guru.');</script>";
		}
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
	
	<script>
		function checkPassword() {
			$("#loader-icon2").show();
			jQuery.ajax({
				url		: "query/check-password.php",
				data	: 'password='+$("#password").val()+'&confirm-password='+$("#confirm-password").val(),
				type	: "POST",
				success	: function(data){
					$("#user-confirm-password").html(data);
					$("#loader-icon2").hide();
				},
				error	: function (){
				
				}
			});
		}
	</script>
	
	<?php
		$sql_data = "SELECT * FROM subjects LIMIT 6";
		
		if (!$result_data = $mysqli->query($sql_data)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		$sql_data_learning_level = "SELECT count(*) FROM learning_level";
		
		if (!$result_data_learning_level = $mysqli->query($sql_data_learning_level)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		$sql_data_subjects = "SELECT count(*) FROM subjects";
		
		if (!$result_data_subjects = $mysqli->query($sql_data_subjects)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		$sql_data_ebook = "SELECT count(*) FROM e_book";
		
		if (!$result_data_ebook = $mysqli->query($sql_data_ebook)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	?>

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/bg1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Ayo Belajar Bersama Guru</h2>
                        <a href="online-learn.php" class="btn clever-btn">Ayo Belajar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <section class="cool-facts-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <div class="icon">
                            <img src="img/core-img/star.png" alt="">
                        </div>
                        <h2><span class="counter">0</span></h2>
                        <h5>Penghargaan</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <img src="img/core-img/docs.png" alt="">
                        </div>
                        <h2><span class="counter">
						<?php
							$data_learning_level = $result_data_learning_level->fetch_assoc();
							echo $data_learning_level['count(*)'];
						?>
						</span></h2>
                        <h5>Kurikulum</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <div class="icon">
                            <img src="img/core-img/events.png" alt="">
                        </div>
                        <h2><span class="counter">
						<?php
							$data_subjects = $result_data_subjects->fetch_assoc();
							echo $data_subjects['count(*)'];
						?>
						</span></h2>
                        <h5>Mata Pelajaran</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
                        <div class="icon">
                            <img src="img/core-img/earth.png" alt="">
                        </div>
                        <h2><span class="counter">
						<?php
							$data_ebook = $result_data_ebook->fetch_assoc();
							echo $data_ebook['count(*)'];
						?>
						</span></h2>
                        <h5>E-Book Tersedia</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Kurikulum Tersedia</h3><br>
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

    <!-- ##### Best Tutors Start ##### -->
    <!--<section class="best-tutors-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Guru Paling Banyak Diminati</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">
                        <div class="single-tutors-slides">
                            <div class="tutor-thumbnail">
                                <img src="img/bg-img/t-unknown.png" alt="">
                            </div>
                            <div class="tutor-information text-center">
                                <h5>Nama Guru</h5>
                                <span>Guru</span>
                                <p>Deskripsi ..........</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- ##### Best Tutors End ##### -->

    <!-- ##### Register Now Start ##### -->
    <section class="register-now section-padding-100-0 d-flex justify-content-between align-items-center" style="background-image: url(img/core-img/texture.png);">
        <!-- Register Contact Form -->
        <div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="forms">
                            <h4>Ayo! Segera Daftar</h4>
							<form action="query/register.php" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="confirm-password" placeholder="Ulangi Kata Sandi" onBlur="checkPassword()" required>
											<span id="user-confirm-password"></span>
											<p><img src="img/core-img/loader-icon.gif" id="loader-icon" style="display:none" width="100" height="70"/></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Telepon" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn clever-btn w-100">Daftar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="register-now-countdown mb-100 wow fadeInUp" data-wow-delay="500ms">
            <h3>Daftar Sekarang</h3>
            <p>Belajar online bersama kami di Guru.</p>
			<br>
			<h5><i>#LearnIsEasy</i></h5>
			<p>Memahami materi pelajaran jadi lebih mudah dengan materi dan video menarik yang bisa kamu pelajari. Ribuan video belajar tersedia buat kamu.</p>
			<br>
			<h5><i>#LearnIsSimple</i></h5>
			<p>Tutor les online akan membantu kamu membahas soal dan mengerti pelajaran via live chat!.</p>
			<br>
			<h5><i>#LearnIsExciting</i></h5>
			<p>Group chat belajar dengan tutor standby, modul bimbel lengkap, latihan soal dan tryout, serta akses video belajar lengkap di ruangbelajar.</p>
			<br>
			<h5><i>#LearnIsChallenge</i></h5>
			<p>Dengan soal-soal yang bisa kamu kerjakan langsung.</p>
			<br>
			<h5><i>#LearnIsGreat</i></h5>
			<p>Dengan guru privat berkualitas datang ke rumah dengan harga terjangkau.</p>
			<br>
			<h5><i>#LearnIsVirtual</i></h5>
			<p>Dengan kelas virtual yang memungkinkan kamu belajar bersama teman-teman secara online.</p>
            <!--<div class="register-countdown">
                <div class="events-cd d-flex flex-wrap" data-countdown="2019/03/01"></div>
            </div>-->
        </div>
    </section>
    <!-- ##### Register Now End ##### -->

    <!-- ##### Upcoming Events Start ##### -->
    <!--<section class="upcoming-events section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Kursus yang akan datang</h3><br>
                        <p>Segera Hadir</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                        <div class="events-thumb">
                            <img src="img/bg-img/e-unknown.jpg" alt="">
                            <h6 class="event-date">26 Agustus</h6>
                            <h4 class="event-title">Mata Pelajaran</h4>
                        </div>
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> 26 Agustus, 9:00 WIB</p>
                            </div>
                            <div class="events-fee">
                                <a href="#">Rp.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- ##### Upcoming Events End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Kunjungi Blog Kami</h3><br>  
						<div class="row">
							<div class="col-12">
								<br>
								<div class="blog-catagories mb-70 d-flex flex-wrap justify-content-between">

									<!-- Single Catagories -->
									<div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc1.jpg);">
										<a href="blog.php">
											<h6>Blog</h6>
										</a>
									</div>

									<!-- Single Catagories -->
									<div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc2.jpg);">
										<a href="#">
											<h6>Konsep Pelajaran</h6>
										</a>
									</div>

									<!-- Single Catagories -->
									<div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc3.jpg);">
										<a href="#">
											<h6>Ujian Nasional</h6>
										</a>
									</div>

									<!-- Single Catagories -->
									<div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc4.jpg);">
										<a href="#">
											<h6>SBMPTN</h6>
										</a>
									</div>

									<!-- Single Catagories -->
									<div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc5.jpg);">
										<a href="#">
											<h6>Siap Kuliah</h6>
										</a>
									</div>

									<!-- Single Catagories -->
									<div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc6.jpg);">
										<a href="#">
											<h6>Tips Belajar</h6>
										</a>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>

            <!--<div class="row">
                <div class="col-12 col-md-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="img/blog-img/-unknown.png" alt="">
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>Mata Pelajaran</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Kelas .....</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Kategori</a>
                            </div>
                            <p>Deskripsi ..........</p>
                        </div>
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