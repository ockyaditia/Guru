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

    <!-- ##### Catagory ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/bg4.jpg);">
        <h3>Transaksi</h3>
    </div>
	
	<?php
		$user_code = $_SESSION['code'];
		$subject_code = "";
		$payment_code = "";
		
		if (isset($_GET['subject_code'])) {
			//header('location:index.php');
			$subject_code = $_GET['subject_code'];
		}
		
		if (isset($_GET['payment_code'])) {
			//header('location:index.php');
			$payment_code = $_GET['payment_code'];
		}
		
		//$user_code = $_SESSION['code'];
		//$subject_code = $_GET['subject_code'];
		//$payment_code = $_GET['payment_code'];
		
		$sql_data = "SELECT *, count(*) FROM transactions WHERE user_code='$user_code' AND subject_code='$subject_code'";
		
		if (!$result_data = $mysqli->query($sql_data)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		$data = $result_data->fetch_assoc();
		$count = $data['count(*)'];
		$approval = $data['approval'];
		
		echo $count;
		
		if ($count == 0) {
	?>
	
	<script>
		var loadFile = function(event) {
			var output = document.getElementById('preview_image');
			output.src = URL.createObjectURL(event.target.files[0]);
		};
	</script>
	
	<?php
		if (isset($_GET['fail'])) {
	?>
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Melakukan Pembayaran!</strong>. Cek Kembali Data!.</center>
		</div>
	<?php
		} else if (isset($_GET['fail-message'])) {
	?>
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Melakukan Pembayaran!</strong>. <?php echo $_GET['fail-message']; ?>!.</center>
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
                            <h4>Isi Data Pembayaran Anda</h4>
                            <form action="query/transactions.php" method="post" enctype="multipart/form-data">
                                <div class="row">
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="user_code" name="user_code" placeholder="User Code" value="<?php echo $user_code; ?>" required>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="subject_code" name="subject_code" placeholder="Subject Code" value="<?php echo $subject_code; ?>" required>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="payment_code" name="payment_code" placeholder="Payment Code" value="<?php echo $payment_code; ?>" required>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Nama Bank" required>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="account_name" name="account_name" placeholder="Nama Rekening" required>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="account_number" name="account_number" placeholder="Nomor Rekening" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
											<input type="file" class="form-control" id="img" name="img" accept="image/*" onchange="loadFile(event)" required>
											<br>
											<img id="preview_image" src="#" alt="Bukti Pembayaran" width="200px" height="100px">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn clever-btn w-100">Bayar</button>
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
	
	<?php
		} else {
			if ($approval == 1) {
	?>

    <!-- ##### Register Now Start ##### -->
    <section class="popular-courses-area section-padding-100-70" style="background-image: url(img/core-img/texture.png);">
        <!-- Register Contact Form -->
        <div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="forms" align="center">
                            <h4>Pembayaran Anda sedang kami proses.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Register Now End ##### -->
	
	<?php
			} else if ($approval == 2) {
	?>

    <!-- ##### Register Now Start ##### -->
    <section class="popular-courses-area section-padding-100-70" style="background-image: url(img/core-img/texture.png);">
        <!-- Register Contact Form -->
        <div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="forms" align="center">
                            <h4>Pembayaran Anda ditolak.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Register Now End ##### -->
	
	<?php
			}
		}
	?>

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