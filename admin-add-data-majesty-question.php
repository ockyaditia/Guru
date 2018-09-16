<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'header.php';
		include '_session-admin.php';
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
		function checkAvailability() {
			$("#loader-icon1").show();
			jQuery.ajax({
				url		: "check-availability-majesty-question-code.php",
				data	: 'code='+$("#code").val(),
				type	: "POST",
				success	: function(data){
					$("#user-availability-status").html(data);
					$("#loader-icon1").hide();
				},
				error	: function (){
				
				}
			});
		}
		
		var loadFile = function(event) {
			var output = document.getElementById('preview_image');
			output.src = URL.createObjectURL(event.target.files[0]);
		};
	</script>
	
	<?php
		if (isset($_GET['fail'])) {
	?>
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Tambah Data!</strong>. Cek Kembali Data!.</center>
		</div>
	<?php
		} else if (isset($_GET['fail-message'])) {
	?>
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Tambah Data!</strong>. <?php echo $_GET['fail-message']; ?>!.</center>
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
                            <h4>Tambah Data Soal STAN dan Kedinasan</h4>
                            <form action="query/admin-add-data-majesty-question.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="code" name="code" placeholder="Kode" onBlur="checkAvailability()" required>
											<span id="user-availability-status"></span>
											<p><img src="img/core-img/loader-icon.gif" id="loader-icon1" style="display:none" width="100" height="70"/></p>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
											<select class="form-control" id="subject" name="subject" required>
												<option value="" disabled selected>Pilih Jenis Soal</option>
												<option value="STAN">STAN</option>
												<?php
													$sql = "SELECT * FROM majesty_menu";
													if (!$result = $mysqli->query($sql)) {
														$message = "Error.";
														//echo "<script type='text/javascript'>alert('$message');</script>";
														exit;
													}
													
													while ($data = $result->fetch_assoc()) {
														$subject_majesty = $data['name'];
														$code_majesty = $data['code'];
												?>
												<option value="<?php echo $code_majesty; ?>"><?php echo $subject_majesty; ?></option>
												<?php
													}
												?>
											</select>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="question" name="question" placeholder="Pertanyaan" required>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
											<select class="form-control" id="answer" name="answer" required>
												<option value="" disabled selected>Pilih Jawaban</option>
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="C">C</option>
												<option value="D">D</option>
												<option value="E">E</option>
											</select>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="option_a" name="option_a" placeholder="Opsi A">
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="option_b" name="option_b" placeholder="Opsi B">
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="option_c" name="option_c" placeholder="Opsi C">
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="option_d" name="option_d" placeholder="Opsi D">
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="option_e" name="option_e" placeholder="Opsi E">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
											Pilih Berkas E-Book
											<input type="file" class="form-control" id="file_book" name="file_book" accept="application/pdf" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
											Pilih Berkas Video
											<input type="file" class="form-control" id="file_video" name="file_video" accept="video/*" required>
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