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
		if (isset($_GET['fail'])) {
	?>
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Ubah Data!</strong>. Cek Kembali Data!.</center>
		</div>
	<?php
		} else if (isset($_GET['success']) && $_GET['success'] == 1) {
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
	
	<?php
		$sql = "SELECT * FROM background WHERE code='ABOUT_US'";
		
		if (!$result = $mysqli->query($sql)) {
			$message = "Error.";
			//echo "<script type='text/javascript'>alert('$message');</script>";
		}
	
		while ($data = $result->fetch_assoc()) {
			$code_background = $data['code'];
			$img = $data['img'];
		}
	?>

    <!-- ##### Single Course Intro Start ##### -->
    <div id="background_image_change" class="single-course-intro d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/<?php echo $img; ?>);">
        <!-- Content -->
        <div class="single-course-intro-content text-center">
            <!-- Ratings -->
            <!--<div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>-->
            <h3><?php echo $logo_name; ?></h3>
            <div class="meta d-flex align-items-center justify-content-center">
                <a href="<?php echo $facebook_info; ?>">Facebook</a>
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="<?php echo $instagram_info; ?>">Instagram</a>
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="<?php echo $twitter_info; ?>">Twitter</a>
            </div>
            <!--<div class="price">Beri Bintang</div>-->
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
    <!-- ##### Single Course Intro End ##### -->

    <!-- ##### Courses Content Start ##### -->
    <div class="single-course-content section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="course--content">

                        <div class="clever-tabs-content">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Siapa Kami?</a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Silabus</a>
                                </li>-->
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Apa Kata Mereka?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="true">Sponsor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--5" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="true">Kontak Kami</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <!-- Tab Text -->
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                    <div class="clever-description">

                                        <!-- About Course -->
                                        <div class="about-course mb-30">
                                            <h4>Tentang Kami</h4>
											<?php
												$sql_data = "SELECT * FROM about_us";
										
												if (!$result_data = $mysqli->query($sql_data)) {
													$message = "Error.";
													//echo "<script type='text/javascript'>alert('$message');</script>";
												}
												
												$code = '';
												$text = '';
												while ($data = $result_data->fetch_assoc()) {
													$code = $data['code'];
													$text = $data['text'];
												}
												
												if (isset($email) && isset($status) && $status == "Admin") {
											?>
											<form action="query/admin-update-data-about-us.php" method="post">
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<input type="hidden" id="code_old" name="code_old"  value="<?php echo $code; ?>" required>
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<textarea rows="10" cols="50" class="form-control" id="text" name="text" placeholder="Text" required><?php echo $text; ?></textarea>
														</div>
													</div>
													<div class="col-12">
														<button class="btn clever-btn w-100">Ubah</button>
													</div>
												</div>
											</form>
											<?php
												} else {
											?>
											<p><?php echo $text; ?></p>
											<?php
												}
											?>
                                        </div>

                                        <!-- All Instructors -->
                                        <div class="all-instructors mb-30">
                                            <h4>Semua Produk Kami</h4>

                                            <div class="row">
                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <!--<div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>-->
                                                        <div class="instructor-info">
                                                            <h5>Belajar Online</h5>
															<span style="background-color:#FFFF00; font-weight:bold;"><i>#LearnIsGrace</i></span>
															<br>
															<span>Tingkatan jenjang pembelajaran yang bisa kamu pilih sesuai jenjang kamu.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <!--<div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>-->
                                                        <div class="instructor-info">
                                                            <h5>Les Online</h5>
															<span style="background-color:#ff288d; font-weight:bold;"><i>#LearnIsSimple</i></span>
															<br>
															<span>Tutor les online akan membantu kamu membahas soal dan mengerti pelajaran via live chat!.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <!--<div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>-->
                                                        <div class="instructor-info">
                                                            <h5>Digital Bootcamp</h5>
															<span style="background-color:#990000; font-weight:bold;"><i>#LearnIsExciting</i></span>
															<br>
															<span>Group chat belajar dengan tutor standby, modul bimbel lengkap, latihan soal dan tryout, serta akses video belajar lengkap di ruangbelajar.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <!--<div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>-->
                                                        <div class="instructor-info">
                                                            <h5>Tryout Online</h5>
															<span style="background-color:#77ec20;"><i>#LearnIsChallenge</i></span>
															<br>
															<span>Dengan soal-soal yang bisa kamu kerjakan langsung.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <!--<div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>-->
                                                        <div class="instructor-info">
                                                            <h5>Les Private</h5>
															<span style="background-color:#bcf7cb; font-weight:bold;"><i>#LearnIsGreat</i></span>
															<br>
															<span>Dengan guru privat berkualitas datang ke rumah dengan harga terjangkau.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <!--<div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>-->
                                                        <div class="instructor-info">
                                                            <h5>Kelas Virtual</h5>
															<span style="background-color:#ffc3a0; font-weight:bold;"><i>#LearnIsVirtual</i></span>
															<br>
															<span>Dengan kelas virtual yang memungkinkan kamu belajar bersama teman-teman secara online.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<?php
											if (isset($email) && isset($status) && $status == "Admin") {
										?>
                                        <div class="clever-faqs">
                                            <h4>Tambah Tanya Jawab</h4>
											<form action="query/admin-add-data-question.php" method="post" enctype="multipart/form-data">
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<input type="text" class="form-control" id="question" name="question" placeholder="Pertanyaan" required>
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<textarea rows="10" cols="50" class="form-control" id="answer" name="answer" placeholder="Jawaban" required></textarea>
														</div>
													</div>
													<div class="col-12">
														<button class="btn clever-btn w-100">Tambah</button>
													</div>
												</div>
											</form>
                                        </div>
										<?php
											}
										?>

                                        <!-- FAQ -->
                                        <div class="clever-faqs">
                                            <h4>Tanya Jawab</h4>

                                            <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">
											
												<?php
													$sql_data = "SELECT * FROM question";
											
													if (!$result_data = $mysqli->query($sql_data)) {
														$message = "Error.";
														//echo "<script type='text/javascript'>alert('$message');</script>";
													}
													
													while ($data = $result_data->fetch_assoc()) {
														$code = $data['code'];
														$question = $data['question'];
														$answer = $data['answer'];
														
														if (isset($email) && isset($status) && $status == "Admin") {
												?>
												
												<!-- Single Accordian Area -->
                                                <div class="panel single-accordion">
													<form action="query/admin-update-data-question.php" method="post" enctype="multipart/form-data">
														<input type="hidden" id="code_old" name="code_old" value="<?php echo $code; ?>" required>
														<h6>
															<a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo<?php echo $code; ?>" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo<?php echo $code; ?>">
															<input type="text" class="form-control" id="question" name="question" placeholder="Pertanyaan" value="<?php echo $question; ?>" required>
															<span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
															<span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
															</a>
														</h6>
														<div id="collapseTwo<?php echo $code; ?>" class="accordion-content collapse">
															<textarea rows="5" cols="50" class="form-control" id="answer" name="answer" placeholder="Jawaban" required><?php echo $answer; ?></textarea>
															</p>
														</div>
														<button class="btn clever-btn w-100">Ubah</button>
														<a class="btn clever-btn w-100" style="margin: 5px 0;" href="query/admin-remove-data-question.php?remove=<?php echo $code; ?>">Hapus</a>
													</form>
                                                </div>
												
												<?php
														} else {
												?>

                                                <!-- Single Accordian Area -->
                                                <div class="panel single-accordion">
                                                    <h6>
                                                        <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo"><?php echo $question; ?>
                                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                        </a>
                                                    </h6>
                                                    <div id="collapseTwo" class="accordion-content collapse">
                                                        <p><?php echo $answer; ?></p>
                                                    </div>
                                                </div>
												
												<?php
														}
													}
												?>
												
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Tab Text -->
                                <!--<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                    <div class="clever-curriculum">

                                        <div class="about-curriculum mb-30">
                                            <h4>Silabus</h4>
                                            <p>.................</p>
                                        </div>

                                        <div class="curriculum-level mb-30">
                                            <h4 class="d-flex justify-content-between"><span>Week 1</span> <span>0/4</span></h4>
                                            <h5>Beginners Level</h5>
                                            <p>.................</p>

                                            <ul class="curriculum-list">
                                                <li><i class="fa fa-file" aria-hidden="true"></i> 1 video, 1 audio, 1 reading
                                                    <ul>
                                                        <li>
                                                            <span><i class="fa fa-video-camera" aria-hidden="true"></i> Video: <span>Greetings and Introductions</span></span>
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 15 minutes</span>
                                                        </li>
                                                        <li>
                                                            <span><i class="fa fa-file-text" aria-hidden="true"></i> Reading: <span>Word Types</span></span>
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 15 minutes</span>
                                                        </li>
                                                        <li>
                                                            <span><i class="fa fa-volume-down" aria-hidden="true"></i> Audio: <span>Listening Exercise</span></span>
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 15 minutes</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <span><i class="fa fa-graduation-cap" aria-hidden="true"></i> Graded: Cumulative Language Quiz</span>
                                                    <span>3 Questions</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="curriculum-level mb-30">
                                            <h4 class="d-flex justify-content-between"><span>Week 2</span> <span>0/5</span></h4>
                                            <h5>Intermediate Level</h5>
                                            <p>.................</p>

                                            <ul class="curriculum-list">
                                                <li><i class="fa fa-file" aria-hidden="true"></i> 1 video, 1 audio, 1 reading
                                                    <ul>
                                                        <li>
                                                            <span><i class="fa fa-video-camera" aria-hidden="true"></i> Video: <span>Greetings and Introductions</span></span>
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 15 minutes</span>
                                                        </li>
                                                        <li>
                                                            <span><i class="fa fa-file-text" aria-hidden="true"></i> Reading: <span>Word Types</span></span>
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 15 minutes</span>
                                                        </li>
                                                        <li>
                                                            <span><i class="fa fa-volume-down" aria-hidden="true"></i> Audio: <span>Listening Exercise</span></span>
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 15 minutes</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <span><i class="fa fa-graduation-cap" aria-hidden="true"></i> Graded: Cumulative Language Quiz</span>
                                                    <span>3 Questions</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>-->

                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                    <div class="clever-review">

                                        <!-- About Review -->
                                        <div class="about-review mb-30">
                                            <h4>Kirim Komentar</h4>
											<form action="query/admin-add-data-comment.php" method="post" enctype="multipart/form-data">
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<textarea rows="10" cols="50" class="form-control" id="comment" name="comment" placeholder="Komentar" required></textarea>
														</div>
													</div>
													<div class="col-12">
														<button class="btn clever-btn w-100">Tambah</button>
													</div>
												</div>
											</form>
                                        </div>

										<!--<div class="clever-ratings d-flex align-items-center mb-30">

                                            <div class="total-ratings text-center d-flex align-items-center justify-content-center">
                                                <div class="ratings-text">
                                                    <h2>4.5</h2>
                                                    <div class="ratings--">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                    </div>
                                                    <span>Rated 5 out of 3 Ratings</span>
                                                </div>
                                            </div>

                                            <div class="rating-viewer">
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>5 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>80%</span>
                                                </div>
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>4 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>20%</span>
                                                </div>
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>3 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>0%</span>
                                                </div>
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>2 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>0%</span>
                                                </div>
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>1 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>0%</span>
                                                </div>
                                            </div>
                                        </div>-->
										
										<?php
											$sql_data = "SELECT * FROM comment";
									
											if (!$result_data = $mysqli->query($sql_data)) {
												$message = "Error.";
												//echo "<script type='text/javascript'>alert('$message');</script>";
											}
											
											while ($data = $result_data->fetch_assoc()) {
												$code = $data['code'];
												$name = $data['name'];
												$date = $data['date'];
												$comment = $data['comment'];
										?>

                                        <!-- Single Review -->
                                        <div class="single-review mb-30">
                                            <div class="d-flex justify-content-between mb-30">
                                                <!-- Review Admin -->
                                                <div class="review-admin d-flex">
                                                    <!--<div class="thumb">
                                                        <img src="img/bg-img/t-unknown.png" alt="">
                                                    </div>-->
                                                    <div class="text">
                                                        <h6><?php echo $name; ?></h6>
                                                        <span><?php echo $date; ?></span>
                                                    </div>
                                                </div>
                                                <!-- Ratings -->
                                                <!--<div class="ratings">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>-->
                                            </div>
                                            <p><?php echo $comment; ?></p>
											<?php
												if (isset($email) && isset($status) && $status == "Admin") {
											?>
											<a class="btn clever-btn w-100" style="margin: 5px 0;" href="query/admin-remove-data-comment.php?remove=<?php echo $code; ?>">Hapus</a>
											<?php
												}
											?>
                                        </div>
										<?php
											}
										?>
                                    </div>
                                </div>
								
								<script>
									var loadFile = function(event) {
										var output = document.getElementById('preview_image');
										output.src = URL.createObjectURL(event.target.files[0]);
									};
									
									var loadFileUpdate = function(event) {
										var output = document.getElementById('preview_image_update');
										output.src = URL.createObjectURL(event.target.files[0]);
									};
								</script>

                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab--4">
                                    <div class="clever-members">

                                        <!-- About Members -->
										<?php
											if (isset($email) && isset($status) && $status == "Admin") {
										?>
                                        <div class="about-members mb-30">
                                            <h4>Tambah Sponsor</h4>
											<form action="query/admin-add-data-sponsor.php" method="post" enctype="multipart/form-data">
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<input type="text" class="form-control" id="name" name="name" placeholder="Nama Sponsor" required>
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<textarea rows="10" cols="50" class="form-control" id="description" name="description" placeholder="Deskripsi" required></textarea>
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<input type="file" class="form-control" id="img" name="img" accept="image/*" onchange="loadFile(event)">
															<br>
															<img id="preview_image" src="#" alt="Preview Image" width="200px" height="100px">
														</div>
													</div>
													<div class="col-12">
														<button class="btn clever-btn w-100">Tambah</button>
													</div>
												</div>
											</form>
                                        </div>
										<?php
											}
										?>

                                        <!-- All Members -->
                                        <div class="all-instructors mb-30">
                                            <div class="row">
											
												<?php
													$sql_data = "SELECT * FROM sponsor";
											
													if (!$result_data = $mysqli->query($sql_data)) {
														$message = "Error.";
														//echo "<script type='text/javascript'>alert('$message');</script>";
													}
													
													while ($data = $result_data->fetch_assoc()) {
														$code = $data['code'];
														$name = $data['name'];
														$description = $data['description'];
														$img = $data['img'];
														
														if (isset($email) && isset($status) && $status == "Admin") {
												?>
											
													<!-- Single Members -->
													<div class="col-lg-6">
														<div class="single-instructor d-flex align-items-center mb-30">
															<div class="instructor-thumb">
																<img id="preview_image_update" src="img/bg-img/<?php echo $img; ?>" alt="">
															</div>
															<div class="instructor-info">
																<form action="query/admin-update-data-sponsor.php" method="post" enctype="multipart/form-data">
																	<input type="hidden" id="code_old" name="code_old" value="<?php echo $code; ?>" required>
																	<input type="text" class="form-control" id="name" name="name" placeholder="Nama Sponsor" value="<?php echo $name; ?>" required>
																	<textarea rows="5" cols="50" class="form-control" id="description" name="description" placeholder="Deskripsi" required><?php echo $description; ?></textarea>
																	<input type="file" class="form-control" id="img" name="img" accept="image/*" onchange="loadFileUpdate(event)">
																	<button class="btn clever-btn w-100">Ubah</button>
																</form>
																<a class="btn clever-btn w-100" style="margin: 5px 0;" href="query/admin-remove-data-sponsor.php?remove=<?php echo $code; ?>">Hapus</a>
															</div>
														</div>
													</div>
												
												<?php
														} else {
												?>
											
                                                <!-- Single Members -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/<?php echo $img; ?>" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5><?php echo $name; ?></h5>
                                                            <span><?php echo $description; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
												
												<?php
														}
													}
												?>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab--5">
                                    <div class="clever-review">

                                        <!-- About Review -->
                                        <div class="about-review mb-30">
                                            <h4>Kontak Kami</h4>
											<?php
												$sql_data = "SELECT * FROM contact";
										
												if (!$result_data = $mysqli->query($sql_data)) {
													$message = "Error.";
													//echo "<script type='text/javascript'>alert('$message');</script>";
												}
												
												$code = '';
												$text = '';
												while ($data = $result_data->fetch_assoc()) {
													$code = $data['code'];
													$text = $data['text'];
												}
												
												if (isset($email) && isset($status) && $status == "Admin") {
											?>
											<form action="query/admin-update-data-contact.php" method="post">
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<input type="hidden" id="code_old" name="code_old"  value="<?php echo $code; ?>" required>
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<textarea rows="10" cols="50" class="form-control" id="text" name="text" placeholder="Text" required><?php echo $text; ?></textarea>
														</div>
													</div>
													<div class="col-12">
														<button class="btn clever-btn w-100">Ubah</button>
													</div>
												</div>
											</form>
											<?php
												} else {
											?>
											<p><?php echo $text; ?></p>
											<?php
												}
											?>
                                        </div>
										
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="course-sidebar">
                        <!-- Buy Course -->
                        <!--<a href="#" class="btn clever-btn mb-30 w-100">Beri Bintang</a>-->

                        <!-- Widget -->
                        <div class="sidebar-widget">
                            <h4>Web</h4>
                            <ul class="features-list">
                                <li>
                                    <h6><i class="fa fa-file" aria-hidden="true"></i> Pelajar</h6>
									<?php
										$sql_data = "SELECT count(*) FROM user_access WHERE status = 'Pelajar'";
										
										if (!$result_data = $mysqli->query($sql_data)) {
											$message = "Error.";
											//echo "<script type='text/javascript'>alert('$message');</script>";
										}
										
										$data = $result_data->fetch_assoc();
									?>
                                    <h6><?php echo $data['count(*)']; ?></h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-file" aria-hidden="true"></i> Kurikulum</h6>
									<?php
										$sql_data = "SELECT count(*) FROM learning_level";
										
										if (!$result_data = $mysqli->query($sql_data)) {
											$message = "Error.";
											//echo "<script type='text/javascript'>alert('$message');</script>";
										}
										
										$data = $result_data->fetch_assoc();
									?>
                                    <h6><?php echo $data['count(*)']; ?></h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-file" aria-hidden="true"></i> Mata Pelajaran</h6>
									<?php
										$sql_data = "SELECT count(*) FROM subjects";
										
										if (!$result_data = $mysqli->query($sql_data)) {
											$message = "Error.";
											//echo "<script type='text/javascript'>alert('$message');</script>";
										}
										
										$data = $result_data->fetch_assoc();
									?>
                                    <h6><?php echo $data['count(*)']; ?></h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-file" aria-hidden="true"></i> E-Book</h6>
									<?php
										$sql_data = "SELECT count(*) FROM e_book";
										
										if (!$result_data = $mysqli->query($sql_data)) {
											$message = "Error.";
											//echo "<script type='text/javascript'>alert('$message');</script>";
										}
										
										$data = $result_data->fetch_assoc();
									?>
                                    <h6><?php echo $data['count(*)']; ?></h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-file" aria-hidden="true"></i> Video</h6>
									<?php
										$sql_data = "SELECT count(*) FROM video";
										
										if (!$result_data = $mysqli->query($sql_data)) {
											$message = "Error.";
											//echo "<script type='text/javascript'>alert('$message');</script>";
										}
										
										$data = $result_data->fetch_assoc();
									?>
                                    <h6><?php echo $data['count(*)']; ?></h6>
                                </li>
                                <!--<li>
                                    <h6><i class="fa fa-thumbs-up" aria-hidden="true"></i> Disukai</h6>
                                    <h6>.....</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-thumbs-down" aria-hidden="true"></i> Tidak Disukai</h6>
                                    <h6>.....</h6>
                                </li>-->
                            </ul>
                        </div>

                        <!-- Widget -->
                        <!--<div class="sidebar-widget">
                            <h4>Sertifikasi</h4>
                            <img src="img/bg-img/cer.png" alt="">
                        </div>-->

                        <!-- Widget -->
                        <div class="sidebar-widget">
                            <h4>Kunjungi</h4>
							<?php
								if (isset($email) && isset($status) && $status == "Admin") {
							?>
							<form action="query/admin-update-data-info-media-social.php" method="post" enctype="multipart/form-data">
								<input type="hidden" id="code_old" name="code_old" value="<?php echo $code_info; ?>">
								<!-- Single Courses -->
								<div class="single--courses d-flex align-items-center">
									<div class="thumb">
										<img src="img/bg-img/facebook.png" alt="" width="50" height="50">
									</div>
									<div class="content">
										<h5>Facebook</h5>
										<h6>Link: <input type="text" id="facebook" name="facebook" placeholder="Facebook" value="<?php echo $facebook_info; ?>"></h6>
									</div>
								</div>

								<!-- Single Courses -->
								<div class="single--courses d-flex align-items-center">
									<div class="thumb">
										<img src="img/bg-img/instagram.png" alt="" width="50" height="50">
									</div>
									<div class="content">
										<h5>Instagram</h5>
										<h6>Link: <input type="text" id="instagram" name="instagram" placeholder="Instagram" value="<?php echo $instagram_info; ?>"></h6>
									</div>
								</div>

								<!-- Single Courses -->
								<div class="single--courses d-flex align-items-center">
									<div class="thumb">
										<img src="img/bg-img/twitter.png" alt="" width="50" height="50">
									</div>
									<div class="content">
										<h5>Twitter</h5>
										<h6>Link: <input type="text" id="twitter" name="twitter" placeholder="Twitter" value="<?php echo $twitter_info; ?>"></h6>
									</div>
								</div>
								<button class="btn clever-btn w-100">Ubah</button>
							</form>
							<?php
								} else {
							?>
                            <!-- Single Courses -->
                            <div class="single--courses d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/bg-img/facebook.png" alt="" width="50" height="50">
                                </div>
                                <div class="content">
                                    <h5>Facebook</h5>
                                    <h6><a href="<?php echo $facebook_info; ?>"><?php echo $facebook_info; ?></a></h6>
                                </div>
                            </div>

                            <!-- Single Courses -->
                            <div class="single--courses d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/bg-img/instagram.png" alt="" width="50" height="50">
                                </div>
                                <div class="content">
                                    <h5>Instagram</h5>
                                    <h6><a href="<?php echo $instagram_info; ?>"><?php echo $instagram_info; ?></h6>
                                </div>
                            </div>

                            <!-- Single Courses -->
                            <div class="single--courses d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/bg-img/twitter.png" alt="" width="50" height="50">
                                </div>
                                <div class="content">
                                    <h5>Twitter</h5>
                                    <h6><a href="<?php echo $twitter_info; ?>"><?php echo $twitter_info; ?></h6>
                                </div>
                            </div>
							<?php
								}
							?>
                        </div>
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