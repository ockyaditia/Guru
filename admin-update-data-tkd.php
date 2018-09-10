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
				url		: "check-availability-update-tkd-code.php",
				data	: 'code='+$("#code").val(),
				data	: 'code='+$("#code").val()+'&code_old='+$("#code_old").val(),
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
			<center><strong>Gagal Ubah Data!</strong>. Cek Kembali Data!.</center>
		</div>
	<?php
		} else if (isset($_GET['fail-message'])) {
	?>
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Ubah Data!</strong>. <?php echo $_GET['fail-message']; ?>!.</center>
		</div>
	<?php
		}
	?>
	
	<?php
		if (isset($_GET['update'])) {
			$code = $_GET['update'];
			
			require ("config/config.php");
			$sql = "SELECT * FROM tkd WHERE code = '$code'";
			if (!$result = $mysqli->query($sql)) {
				$message = "Error.";
				//echo "<script type='text/javascript'>alert('$message');</script>";
				exit;
			}
			
			while ($data = $result->fetch_assoc()) {
				$code = $data['code'];
				$name = $data['name'];
				$description = $data['description'];
			}
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
                            <h4>Ubah Data Tes Kompetensi Dasar (TKD)</h4>
                            <form action="query/admin-update-data-tkd.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="hidden" id="code_old" name="code_old" value="<?php echo $code; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="code" name="code" placeholder="Kode" onBlur="checkAvailability()" value="<?php echo $code; ?>" required>
											<span id="user-availability-status"></span>
											<p><img src="img/core-img/loader-icon.gif" id="loader-icon1" style="display:none" width="100" height="70"/></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama TKD" value="<?php echo $name; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea rows="4" cols="50" class="form-control" id="description" name="description" placeholder="Deksripsi" required><?php echo $description; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn clever-btn w-100">Ubah</button>
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