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
		$subject = "";
		$class = "";
		if (isset($_GET['subject']) && isset($_GET['class'])) {
			$subject = $_GET['subject'];
			$class = $_GET['class'];
		
			$sql_data = "SELECT * FROM quiz WHERE subject='$subject' AND class='$class'";
			
			if (!$result_data = $mysqli->query($sql_data)) {
				$message = "Error.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
	?>
	
	<?php
		$sql_background = "SELECT * FROM background WHERE code='ONLINE_LEARN'";
		
		if (!$result_background = $mysqli->query($sql_background)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	
		while ($data_background = $result_background->fetch_assoc()) {
			$code_background = $data_background['code'];
			$img = $data_background['img'];
		}
		
		$sql_time = "SELECT * FROM subjects WHERE name='$subject'";
		
		if (!$result_time = $mysqli->query($sql_time)) {
			$message = "Error.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	
		while ($data_time = $result_time->fetch_assoc()) {
			$time = $data_time['time'] / 3600;
		}
	?>

	<!-- ##### Catagory ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/<?php echo $img; ?>);">
        <h3>Kuis</h3>
		<br>
        <h4 id="timer" style="display:none;"><?php echo $time; ?></h4>
    </div>

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Kuis</h3>
						<br>
						<div id="clockdiv">
							<div style="display:none;">
								<span class="days"></span>
								<div class="smalltext">Hari</div>
							</div>
							<div>
								<span class="hours"></span>
								<div class="smalltext">Jam</div>
							</div>
							<div>
								<span class="minutes"></span>
								<div class="smalltext">Menit</div>
							</div>
							<div>
								<span class="seconds"></span>
								<div class="smalltext">Detik</div>
							</div>
						</div>
						<div id="clockdiv-result" style="display:none;">
							<div style="display:none;">
								<span class="days-result"></span>
								<div class="smalltext">Hari</div>
							</div>
							<div>
								<span class="hours-result"></span>
								<div class="smalltext">Jam</div>
							</div>
							<div>
								<span class="minutes-result"></span>
								<div class="smalltext">Menit</div>
							</div>
							<div>
								<span class="seconds-result"></span>
								<div class="smalltext">Detik</div>
							</div>
						</div>
							
						<script src="countdown-timer.js"></script>
                    </div>
					<center><h4 id="result-timed-out" style="color:red; display:none;">Waktu Anda Telah Habis</h4></center>
                </div>
            </div>
        </div>
		
		<div class="register-contact-form mb-100 wow fadeInUp section-padding-0-100" style="padding-bottom:480px;" data-wow-delay="250ms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="forms " align="center">
                            <div id="quiz_container" class="quiz-container">
								<div id="quiz"></div>
							</div>
							<br>
							<br>
							<button id="previous" class="btn clever-btn">Sebelumnya</button>
							<button id="next" class="btn clever-btn">Selanjutnya</button>
							<button id="submit" class="btn clever-btn" style="visibility:visible;">Yey!, Sudah Selesai</button>
							<a href="" id="try-again" class="btn clever-btn" style="display:none; color:white;">Mencoba Lagi</a>
							<div id="results"></div>
							
							<script>
								var questions = [
									<?php
										while ($data = $result_data->fetch_assoc()) {
											$code = $data['code'];
											$question = $data['question'];
											$answer = $data['answer'];
											$option_a = $data['option_a'];
											$option_b = $data['option_b'];
											$option_c = $data['option_c'];
											$option_d = $data['option_d'];
											$option_e = $data['option_e'];
											$video = $data['video'];
									?>
									{
										code: "<?php echo $code; ?>?",
										question: "<?php echo $question; ?>?",
										answers: {
											<?php if ($option_a != "") { ?>A: "<?php echo $option_a; ?>", <?php } ?>
											<?php if ($option_b != "") { ?>B: "<?php echo $option_b; ?>", <?php } ?>
											<?php if ($option_c != "") { ?>C: "<?php echo $option_c; ?>", <?php } ?>
											<?php if ($option_d != "") { ?>D: "<?php echo $option_d; ?>", <?php } ?>
											<?php if ($option_e != "") { ?>E: "<?php echo $option_e; ?>", <?php } ?>
										},
										correctAnswer: "<?php echo $answer; ?>",
										video: "<?php echo $video; ?>",
									},
									<?php
										}
									?>
								];
							</script>
							
							<script src="quiz.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Popular Courses End ##### -->
	
	<?php
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