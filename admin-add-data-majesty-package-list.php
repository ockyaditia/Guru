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
	
	<?php
		if (isset($_GET['add'])) {
			$package = $_GET['add'];
		}
		
		$sql_select = "SELECT subject FROM majesty_package WHERE code = '$package'";
	
		if (!$result_select = $mysqli->query($sql_select)) {
			$message = "Error.";
			//echo "<script type='text/javascript'>alert('$message');</script>";
			exit;
		}
		
		while ($data_select = $result_select->fetch_assoc()) {
			$subject = $data_select['subject'];
		}
	?>
	
	<script>
		function returnDesc() {
			jQuery.ajax({
				url		: "ajax-majesty.php",
				data	: 'question='+$("#question").val(),
				type	: "POST",
				success	: function(data){
					$("#description").html(data);
				},
				error	: function (){
				
				}
			});
		}
	</script>

    <!-- ##### Register Now Start ##### -->
    <section class="popular-courses-area section-padding-100-70" style="background-image: url(img/core-img/texture.png);">
        <!-- Register Contact Form -->
        <div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="forms">
                            <h4>Tambah Data Paket</h4>
                            <form action="query/admin-add-data-majesty-package-list.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text"  class="form-control" id="package" name="package" value="<?php echo $package; ?>" readonly required>
                                        </div>
                                    </div>
									<div class="col-12">
										<div class="form-group">
											<select class="form-control" id="question" name="question" onBlur="returnDesc()" required>
												<option value="" disabled selected>Pilih Soal</option>
												<?php
													$sql = "SELECT * FROM majesty_question WHERE subject='$subject'";
													if (!$result = $mysqli->query($sql)) {
														$message = "Error.";
														//echo "<script type='text/javascript'>alert('$message');</script>";
														exit;
													}
													
													while ($data = $result->fetch_assoc()) {
														$code_question = $data['code'];
												?>
												<option value="<?php echo $code_question; ?>"><?php echo $code_question; ?></option>
												<?php
													}
												?>
											</select>
										</div>
									</div>
									<div class="col-12">
                                        <div class="form-group">
                                            <textarea rows="4" cols="50" class="form-control" id="description" name="description" placeholder="Deksripsi" required readonly ></textarea>
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