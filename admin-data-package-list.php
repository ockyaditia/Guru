<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'header-grid.php';
		include 'header.php';
		include '_session-admin.php';
	?>
	<script src="js/admin-data-package-list-grid.js" ></script>
	<!-- [DO NOT DEPLOY] --> <script type="text/javascript">window.onload = function() { editableGrid.onloadHTML("data-grid-data-package-list"); } </script>
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
		if (isset($_GET['success']) && $_GET['success'] == 1) {
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
	
	<?php
		if (isset($_GET['fail'])) {
	?>
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Hapus Data!</strong></center>
		</div>
	<?php
		}
	?>
	
	<?php
		if (isset($_GET['add'])) {
			$package = $_GET['add'];
			
			$sql = "SELECT count(*) FROM package_list WHERE package = '$package'";
			if (!$result = $mysqli->query($sql)) {
				$message = "Error.";
				//echo "<script type='text/javascript'>alert('$message');</script>";
				exit;
			}
			
			while ($data = $result->fetch_assoc()) {
				$count = $data['count(*)'];
			}
			
			$sql = "SELECT package FROM package WHERE code = '$package'";
			if (!$result = $mysqli->query($sql)) {
				$message = "Error.";
				//echo "<script type='text/javascript'>alert('$message');</script>";
				exit;
			}
			
			while ($data = $result->fetch_assoc()) {
				$package_number = $data['package'];
			}
			
			$sql = "SELECT package FROM package_detail";
			if (!$result = $mysqli->query($sql)) {
				$message = "Error.";
				//echo "<script type='text/javascript'>alert('$message');</script>";
				exit;
			}
			
			while ($data = $result->fetch_assoc()) {
				$package_detail = $data['package'];
			}
			
			$package_total = $package_number * $package_detail;
		}
	?>

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Kelola Data Soal</h3>
                    </div>
                </div>
            </div>
			
			<div align="left">
				<a href="admin-data-package.php"><img src="img/core-img/back.png" width="75px" height="75px" alt="Kembali"> Kembali</a>
			</div>
			
			<?php
				if ($count < $package_total) {
			?>
			<div align="right">
				<a href="admin-add-data-package-list.php?add=<?php echo $package; ?>">Tambah Data <img src="img/core-img/new.png" width="50px" height="50px" alt="Tambah Data"></a>
			</div>
			<?php
				} else {
			?>
			<div align="right">
				<h6>Soal Telah Terdaftar Sebanyak <?php echo $package_total; ?> Soal</h6>
			</div>
			<?php
				}
			?>
			
			<br>
			<br>

            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
						<!-- Feedback message zone -->
						<div id="message"></div>

						<!--  Number of rows per page and bars in chart -->
						<div id="pagecontrol">
							<label for="pagecontrol">Baris per halaman: </label>
							<select id="pagesize" name="pagesize">
								<option value="5">5</option>
								<option value="10">10</option>
								<option value="15">15</option>
								<option value="20">20</option>
								<option value="25">25</option>
								<option value="30">30</option>
								<option value="40">40</option>
								<option value="50">50</option>
							</select>
							&nbsp;&nbsp;
							<label for="barcount">Bar dalam bagan: </label>
							<select id="barcount" name="barcount">
								<option value="5">5</option>
								<option value="10">10</option>
								<option value="15">15</option>
								<option value="20">20</option>
								<option value="25">25</option>
								<option value="30">30</option>
								<option value="40">40</option>
								<option value="50">50</option>
							</select>	
						</div>
					
						<!-- Grid filter -->
						<label for="filter">Cari :</label>
						<input type="text" id="filter"/>
					
						<!-- Grid contents -->
						<div id="tablecontent"></div>
						<div style="overflow:auto; white-space:nowrap;">
						<!-- [DO NOT DEPLOY] --> <?php include("data-grid-data-package-list.php"); ?>	
						</div>
					
						<!-- Paginator control -->
						<div id="paginator"></div>
					
						<!-- Edition zone (to demonstrate the "fixed" editor mode) -->
						<!--<div id="edition"></div>-->
						
						<!-- Charts zone -->
						<!--<div id="barchartcontent"></div>-->
						<div id="piechartcontent"></div>
						
						<?php
							//for ($i = 0; $i < 20; $i++) {
							//	echo "<br>";
							//}
						?>
				</div>
			</div>
		</div>
    </section>
    <!-- ##### Popular Courses End ##### -->

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
		include 'lib-grid.php';
	?>
</body>

</html>