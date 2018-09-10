<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'header-grid.php';
		include 'header.php';
		include '_session-admin.php';
	?>
	<script src="js/admin-data-tpa-grid.js" ></script>
	<!-- [DO NOT DEPLOY] --> <script type="text/javascript">window.onload = function() { editableGrid.onloadHTML("data-grid-data-tpa"); } </script>
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

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Kelola Data Tes Potensial Akademik (TPA)</h3>
                    </div>
                </div>
            </div>
			
			<div align="right">
				<a href="admin-add-data-tpa.php">Tambah Data TPA <img src="img/core-img/new.png" width="50px" height="50px" alt="Tambah Data"></a>
			</div>
			
			<br>
			
			<div align="right">
				<a href="admin-data-tpa-question.php">Tambah Data Soal TPA <img src="img/core-img/new.png" width="50px" height="50px" alt="Tambah Data"></a>
			</div>
			
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
						<!-- [DO NOT DEPLOY] --> <?php include("data-grid-data-tpa.php"); ?>	
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