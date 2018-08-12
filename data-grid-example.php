<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'header-grid.php';
	?>
	<script src="js/grid.js" ></script>
	<!-- [DO NOT DEPLOY] --> <script type="text/javascript">window.onload = function() { editableGrid.onloadHTML("data-grid"); } </script>
</head>

<body>
	<!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Kelola Data Pengguna</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
						<div id="wrap">		
							<!-- Feedback message zone -->
							<div id="message"></div>

							<!--  Number of rows per page and bars in chart -->
							<div id="pagecontrol">
								<label for="pagecontrol">Rows per page: </label>
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
								<label for="barcount">Bars in chart: </label>
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
							<label for="filter">Filter :</label>
							<input type="text" id="filter"/>
						
							<!-- Grid contents -->
							<div id="tablecontent"></div>
							<!-- [DO NOT DEPLOY] --> <?php include("data-grid.php"); ?>	
						
							<!-- Paginator control -->
							<div id="paginator"></div>
						
							<!-- Edition zone (to demonstrate the "fixed" editor mode) -->
							<div id="edition"></div>
							
							<!-- Charts zone -->
							<div id="barchartcontent"></div>
							<div id="piechartcontent"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    <!-- ##### Popular Courses End ##### -->
</body>

</html>