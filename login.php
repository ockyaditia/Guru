<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'header.php';
	?>
</head>

<body>
	<script src="js/facebook.js"></script>

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
		$("#loader-icon").show();
		jQuery.ajax({
			url		: "query/check-password.php",
			data	: 'password='+$("#password").val()+'&confirm-password='+$("#confirm-password").val(),
			type	: "POST",
			success	: function(data){
				$("#user-confirm-password").html(data);
				$("#loader-icon").hide();
			},
			error	: function (){
			
			}
		});
	}
	</script>
	
	<?php
		if (isset($_GET['success']) && $_GET['success'] == 1) {
	?>
		<div class="alert alert-success" role="alert">
			<center><strong>Berhasil Daftar, Silahkan Masuk.</strong></center>
		</div>
	<?php
		}
	?>
	
	<?php
		if (isset($_GET['fail'])) {
	?>
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Masuk!</strong>. Cek Email dan Password Anda!.</center>
		</div>
	<?php
		}
	?>

    <!-- ##### Register Now Start ##### -->
    <section class="popular-courses-area section-padding-100-70" style="background-image: url(img/core-img/texture.png);">
        <!-- Register Contact Form -->
        <div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="forms">
                            <h4>Ayo! Mulai Belajar!</h4>
                            <form action="config/authentication.php" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="confirm-password" placeholder="Ulangi Kata Sandi" onBlur="checkPassword()" required>
											<span id="user-confirm-password"></span>
											<p><img src="img/core-img/loader-icon.gif" id="loader-icon" style="display:none" width="100" height="70"/></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn clever-btn w-100">Masuk</button>
                                    </div>
                                </div>
                            </form>
							<form action="query/register-facebook.php" method="post">
								<input type="hidden" name="code" id="facebook-id" required>
								<input type="hidden" name="name" id="facebook-name" required>
								<input type="hidden" name="email" id="facebook-email" required>
								<input type="hidden" name="facebook"id="facebook-facebook" >
								<button id="facebook-click" style="visibility:hidden"></button>
                            </form>
							<br>
							<br>
							<div class="row">
								<div class="col">
									<!--<a href="#" class="btn_login w-100 fb fb-login-button">
										<i class="fa fa-facebook fa-fw"></i> Masuk dengan Facebook
									</a>
									<a href="#" class="btn_login w-100 twitter">
										<i class="fa fa-twitter fa-fw"></i> Masuk dengan Twitter
									</a>-->
									<div align="center">
										<div class="fb-login-button w-100" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
										<!--<div id="fb_id"></div>
										<div id="fb_name"></div>
										<div id="fb_email"></div>
										<button onclick="javascript:login();">Login Facebook</button>
										<br>
										<button onclick="javascript:logout();">Logout from Facebook</button>-->
										<div id="facebook-status"></div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Register Now End ##### -->

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