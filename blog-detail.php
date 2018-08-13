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
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Catagory Area Start ##### -->
    <div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url(img/blog-img/-unknown.png);">
        <div class="blog-details-headline">
            <h3>Sejarah</h3>
            <div class="meta d-flex align-items-center justify-content-center">
                <a href="#">Sekolah Menengah Atas (SMA) Kelas 11</a>
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="#">Sejarah Indonesia</a>
            </div>
        </div>
    </div>
    <!-- ##### Catagory Area End ##### -->

    <!-- ##### Blog Details Content ##### -->
    <div class="blog-details-content section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                        <p>Latar Belakang dan Dampak Gerakan Pan Islamisme di Indonesia.</p>
                        <h5 class="text-center py-4">.................</h5>
                        <p>.................</p>
                        <!-- Tags -->
                        <div class="post-tags">
                            <ul>
                                <li><a href="#">Sejarah</a></li>
                                <li><a href="#">Sejarah Indonesia</a></li>
                                <li><a href="#">Islamisme</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="related-posts section-padding-100-0">
            <div class="container-fluid">
                <div class="row">
                    <!-- Single Blog Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-area mb-100">
                            <img src="img/blog-img/-unknown.png" alt="">
                            <!-- Blog Content -->
							<div class="blog-content">
								<a href="blog-detail.php" class="blog-headline">
									<h4>Bahasa Inggris</h4>
								</a>
								<div class="meta d-flex align-items-center">
									<a href="#">Sekolah Menengah Atas (SMA) Kelas 11</a>
									<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									<a href="#">Bahasa</a>
								</div>
								<p>Rumus dan Contoh Kalimat Continuous Tense Passive Form</p>
							</div>
                        </div>
                    </div>

                    <!-- Single Blog Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-area mb-100">
                            <img src="img/blog-img/-unknown.png" alt="">
                            <!-- Blog Content -->
                            <div class="blog-content">
								<a href="blog-detail.php" class="blog-headline">
									<h4>Matematika</h4>
								</a>
								<div class="meta d-flex align-items-center">
									<a href="#">Sekolah Menengah Pertama (SMP) Kelas 7</a>
									<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									<a href="#">Matematika</a>
								</div>
								<p>Mengenal Operasi Hitung Pada Pecahan</p>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <!-- Post A Comment -->
                <div class="col-12 col-lg-6">
                    <div class="post-a-comments mb-70">
                        <h4>Tulis Komentar</h4>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="text" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Pesan"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn clever-btn w-100">Kirim Komentar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Comments -->
                <div class="col-12 col-lg-6">
                    <div class="comments-area">
                        <h4>Komentar (12)</h4>

                        <ol class="comments-list">
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Single Comment -->
                                <div class="single-comment-wrap mb-30">
                                    <div class="d-flex justify-content-between mb-30">
                                        <!-- Comment Admin -->
                                        <div class="comment-admin d-flex">
                                            <div class="thumb">
                                                <img src="img/bg-img/t-unknown.png" alt="">
                                            </div>
                                            <div class="text">
                                                <h6>Nama</h6>
                                                <span>Tanggal</span>
                                            </div>
                                        </div>
                                        <!-- Reply -->
                                        <div class="reply">
                                            <a href="#">Balas</a>
                                        </div>
                                    </div>
                                    <p>Komentar</p>
                                </div>

                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Single Comment -->
                                        <div class="single-comment-wrap">
                                            <div class="d-flex justify-content-between mb-30">
                                                <!-- Comment Admin -->
                                                <div class="comment-admin d-flex">
                                                    <div class="thumb">
                                                        <img src="img/bg-img/t-unknown.png" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <h6>Nama</h6>
                                                        <span>Tanggal</span>
                                                    </div>
                                                </div>
                                                <!-- Reply -->
                                                <div class="reply">
                                                    <a href="#">Balas</a>
                                                </div>
                                            </div>
                                            <p>Komentar</p>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <li class="single_comment_area mb-30">
                                <!-- Single Comment -->
                                <div class="single-comment-wrap">
                                    <div class="d-flex justify-content-between mb-30">
                                        <!-- Comment Admin -->
                                        <div class="comment-admin d-flex">
                                            <div class="thumb">
                                                <img src="img/bg-img/t-unknown.png" alt="">
                                            </div>
                                            <div class="text">
                                                <h6>Nama</h6>
                                                <span>Tanggal</span>
                                            </div>
                                        </div>
                                        <!-- Reply -->
                                        <div class="reply">
                                            <a href="#">Balas</a>
                                        </div>
                                    </div>
                                    <p>Komentar</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="col-12">
                    <div class="load-more text-center mt-50">
                        <a href="#" class="btn clever-btn btn-2">Lebih Banyak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Details Content ##### -->

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