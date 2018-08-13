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
            <!-- Ratings -->
            <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <h3>Guru ID</h3>
            <div class="meta d-flex align-items-center justify-content-center">
                <a href="#">Facebook</a>
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="#">Instagram</a>
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="#">Twitter</a>
            </div>
            <div class="price">Beri Bintang</div>
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
                                    <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Tentang Guru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Silabus</a>
                                </li>
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
                                            <p>....................</p>
                                        </div>

                                        <!-- All Instructors -->
                                        <div class="all-instructors mb-30">
                                            <h4>Semua Produk Kami</h4>

                                            <div class="row">
                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Belajar Online</h5>
                                                            <span>....................</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Les Online</h5>
                                                            <span>....................</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Digital Bootcamp</h5>
                                                            <span>....................</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Tryout Online</h5>
                                                            <span>....................</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Les Private</h5>
                                                            <span>....................</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Kelas Virtual</h5>
                                                            <span>....................</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- FAQ -->
                                        <div class="clever-faqs">
                                            <h4>Tanya Jawab</h4>

                                            <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

                                                <!-- Single Accordian Area -->
                                                <div class="panel single-accordion">
                                                    <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Pertanyaan
                                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    </a></h6>
                                                    <div id="collapseOne" class="accordion-content collapse show">
                                                        <p>....................</p>
                                                    </div>
                                                </div>

                                                <!-- Single Accordian Area -->
                                                <div class="panel single-accordion">
                                                    <h6>
                                                        <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Pertanyaan
                                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                        </a>
                                                    </h6>
                                                    <div id="collapseTwo" class="accordion-content collapse">
                                                        <p>....................</p>
                                                    </div>
                                                </div>

                                                <!-- Single Accordian Area -->
                                                <div class="panel single-accordion">
                                                    <h6>
                                                        <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Pertanyaan
                                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                        </a>
                                                    </h6>
                                                    <div id="collapseThree" class="accordion-content collapse">
                                                        <p>....................</p>
                                                    </div>
                                                </div>

                                                <!-- Single Accordian Area -->
                                                <div class="panel single-accordion">
                                                    <h6>
                                                        <a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">Pertanyaan
                                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                        </a>
                                                    </h6>
                                                    <div id="collapseFour" class="accordion-content collapse">
                                                        <p>....................</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                    <div class="clever-curriculum">

                                        <!-- About Curriculum -->
                                        <div class="about-curriculum mb-30">
                                            <h4>Silabus</h4>
                                            <p>.................</p>
                                        </div>

                                        <!-- Curriculum Level -->
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

                                        <!-- Curriculum Level -->
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
                                </div>

                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                    <div class="clever-review">

                                        <!-- About Review -->
                                        <div class="about-review mb-30">
                                            <h4>Apa Kata Mereka?</h4>
                                            <p>.................</p>
                                        </div>

                                        <!-- Ratings -->
                                        <div class="clever-ratings d-flex align-items-center mb-30">

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
                                                <!-- Rating -->
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>5 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>80%</span>
                                                </div>
                                                <!-- Rating -->
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>4 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>20%</span>
                                                </div>
                                                <!-- Rating -->
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>3 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>0%</span>
                                                </div>
                                                <!-- Rating -->
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>2 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>0%</span>
                                                </div>
                                                <!-- Rating -->
                                                <div class="single-rating mb-15 d-flex align-items-center">
                                                    <span>1 STARS</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>0%</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Review -->
                                        <div class="single-review mb-30">
                                            <div class="d-flex justify-content-between mb-30">
                                                <!-- Review Admin -->
                                                <div class="review-admin d-flex">
                                                    <div class="thumb">
                                                        <img src="img/bg-img/t-unnkown.png" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h6>Nama</h6>
                                                        <span>Tanggal</span>
                                                    </div>
                                                </div>
                                                <!-- Ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <p>.................</p>
                                        </div>

                                        <!-- Single Review -->
                                        <div class="single-review mb-30">
                                            <div class="d-flex justify-content-between mb-30">
                                                <!-- Review Admin -->
                                                <div class="review-admin d-flex">
                                                    <div class="thumb">
                                                        <img src="img/bg-img/t-unknown.png" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h6>Nama</h6>
                                                        <span>Tanggal</span>
                                                    </div>
                                                </div>
                                                <!-- Ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <p>.................</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab--4">
                                    <div class="clever-members">

                                        <!-- About Members -->
                                        <div class="about-members mb-30">
                                            <h4>Sponsor</h4>
                                            <p>.................</p>
                                        </div>

                                        <!-- All Members -->
                                        <div class="all-instructors mb-30">
                                            <div class="row">
                                                <!-- Single Members -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Nama Sponsor</h5>
                                                            <span>Web</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Members -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Nama Sponsor</h5>
                                                            <span>Web</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Members -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Nama Sponsor</h5>
                                                            <span>Web</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Members -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Nama Sponsor</h5>
                                                            <span>Web</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Members -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Nama Sponsor</h5>
                                                            <span>Web</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Members -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Nama Sponsor</h5>
                                                            <span>Web</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Members -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Nama Sponsor</h5>
                                                            <span>Web</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Members -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t-unknown.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Nama Sponsor</h5>
                                                            <span>Web</span>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <p>.............</p>
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
                        <a href="#" class="btn clever-btn mb-30 w-100">Beri Bintang</a>

                        <!-- Widget -->
                        <div class="sidebar-widget">
                            <h4>Web</h4>
                            <ul class="features-list">
                                <li>
                                    <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Pengunjung</h6>
                                    <h6>.....</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-bell" aria-hidden="true"></i> Pelajar Baru</h6>
                                    <h6>.....</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-file" aria-hidden="true"></i> E-Buku</h6>
                                    <h6>.....</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-thumbs-up" aria-hidden="true"></i> Disukai</h6>
                                    <h6>.....</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-thumbs-down" aria-hidden="true"></i> Tidak Disukai</h6>
                                    <h6>.....</h6>
                                </li>
                            </ul>
                        </div>

                        <!-- Widget -->
                        <div class="sidebar-widget">
                            <h4>Sertifikasi</h4>
                            <img src="img/bg-img/cer.png" alt="">
                        </div>

                        <!-- Widget -->
                        <div class="sidebar-widget">
                            <h4>Kunjungi</h4>

                            <!-- Single Courses -->
                            <div class="single--courses d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/bg-img/t-unknown.png" alt="">
                                </div>
                                <div class="content">
                                    <h5>Facebook</h5>
                                    <h6>.....</h6>
                                </div>
                            </div>

                            <!-- Single Courses -->
                            <div class="single--courses d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/bg-img/t-unknown.png" alt="">
                                </div>
                                <div class="content">
                                    <h5>Instagram</h5>
                                    <h6>.....</h6>
                                </div>
                            </div>

                            <!-- Single Courses -->
                            <div class="single--courses d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/bg-img/t-unknown.png" alt="">
                                </div>
                                <div class="content">
                                    <h5>Twitter</h5>
                                    <h6>.....</h6>
                                </div>
                            </div>
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