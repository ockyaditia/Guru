        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php" style="text-transform: uppercase; color:#0aa9c5; letter-spacing: 1px; font-weight: bold; font-size:<?php echo $logo_size; ?>pt" ><center><?php echo $logo_name; ?></center></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php">Beranda</a></li>
								<?php
									if (isset($email) && isset($status) && $status == "Admin") {
								?>
                                <li><a href="#">Kelola Web</a>
                                    <ul class="dropdown">
                                        <li><a href="admin-data-logo.php">Nama dan Logo</a></li>
                                        <li><a href="admin-data-learning-level-menu.php">Menu Belajar Online</a></li>
                                        <li><a href="admin-data-user.php">Data Pengguna</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Kelola Data Umum</a>
                                    <ul class="dropdown">
                                        <li><a href="admin-data-learning-level.php">Data Jenjang Belajar</a></li>
                                        <li><a href="admin-data-subjects.php">Data Mata Pelajaran</a></li>
                                        <li><a href="admin-data-ebook.php">Data E-Buku</a></li>
                                        <li><a href="admin-data-video.php">Data Video</a></li>
                                        <li><a href="admin-data-quiz.php">Data Kuis</a></li>
                                        <li><a href="admin-data-payment.php">Data Pembayaran</a></li>
                                        <li><a href="admin-data-transactions.php">Data Transaksi</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Kelola Data PTN</a>
                                    <ul class="dropdown">
                                        <li><a href="admin-data-tpa.php">Data TPA</a></li>
                                        <li><a href="admin-data-tkd.php">Data TKD</a></li>
                                        <li><a href="admin-data-tbi.php">Data TBI</a></li>
                                        <li><a href="admin-data-package.php">Data Paket</a></li>
                                        <li><a href="admin-data-transactions-package.php">Data Transaksi</a></li>
                                        <!--<li><a href="admin-data-to-written-question.php">Soal TO Tertulis</a></li>
                                        <li><a href="admin-data-to-tkd-question.php">Soal TO TKD</a></li>-->
                                    </ul>
                                </li>
								<?php
									}
								?>
                                <!--<li><a href="#">Produk Kami</a>
                                    <ul class="dropdown">
                                        <li><a href="online-learn-menu.php">Belajar Online</a>
											<ul class="dropdown">
												<li><a href="online-learn.php">Umum</a></li>
												<li><a href="#">STAN</a></li>
												<li><a href="#">Kejurusan</a></li>
												<li><a href="#">Ujian PTN</a></li>
											</ul>
										</li>
                                        <li><a href="online-tutoring.php">Les Online</a></li>
                                        <li><a href="digital-bootcamp.php">Digital Bootcamp</a></li>
                                        <li><a href="online-tryout.php">Tryout Online</a></li>
                                        <li><a href="private-tutoring.php">Les Private</a></li>
                                        <li><a href="virtual-class.php">Kelas Virtual</a></li>
                                    </ul>
                                </li>-->
								<li><a href="online-learn-menu.php">Belajar Online</a>
                                    <ul class="dropdown">
										<li><a href="online-learn.php">Umum</a></li>
										<li><a href="online-learn-stan.php">STAN</a></li>
										<li><a href="online-learn-majesty.php">Kedinasan</a></li>
										<li><a href="online-learn-college-exam.php">Seleksi Masuk PTN</a></li>
                                    </ul>
                                </li>
                                <!--<li><a href="coming-soon.php">Materi</a></li>
                                <li><a href="coming-soon.php">Pengajar</a></li>-->
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="about-us.php">Tentang Kami</a></li>
                                <li><a href="help.php">Bantuan</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="coming-soon.php" method="post">
                                    <input type="search" name="search" id="search" placeholder="Pencarian">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
							
                            <!-- Register / Login -->
							<?php
								if (isset($email)) {
							?>
							
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="profile.php">Profil</a>
                                            <a class="dropdown-item" href="logout.php">Keluar</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="img/bg-img/t-unknown.png" alt="">
                                </div>
                            </div>
							
							<?php
								} else {
							?>

                            <div class="register-login-area">
                                <a href="register.php" class="btn">Daftar</a>
                                <a href="login.php" class="btn" <!--class="btn active"-->Masuk</a>
                            </div>
							
							<?php
								}
							?>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>