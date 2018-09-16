		<table id="data-grid-data-majesty-package" class="testgrid">
			<?php
				$sql = "SELECT * FROM majesty_package_detail";
				
				if (!$result = $mysqli->query($sql)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				while ($data = $result->fetch_assoc()) {
					$majesty_package_detail = $data['package'];
				}
			?>
			
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'majesty_package'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM majesty_package WHERE subject='$subject'";
				
				if (!$result_data = $mysqli->query($sql_data)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
			?>
			<tr>
				<?php
					while ($data_column_name = $result_column_name->fetch_assoc()) {
						$columnName = $data_column_name['COLUMN_NAME'];
						
						if ($columnName != 'code' && $columnName != 'subject') {
				?>
				<th><div><?php echo strtoupper($columnName); ?></div></th>
				<?php
						}
					}
				?>
				<th>PILIHAN</th>
			</tr>
			<?php
				while ($data = $result_data->fetch_assoc()) {
					$code = htmlentities($data['code']);
					$name = htmlentities($data['name']);
					$description = htmlentities($data['description']);
					$detail = htmlentities($data['detail']);
					$price = htmlentities($data['price']);
					$duration = htmlentities($data['duration']);
					$package = htmlentities($data['package']);
			?>
			<tr id="<?php echo $code; ?>">
				<td><div><?php echo $name; ?></div></td>
				<td><div><?php echo $description; ?></div></td>
				<td><div><?php echo $detail; ?></div></td>
				<td><div>Rp. <?php echo $price; ?>,-</div></td>
				<td><div><?php echo $duration; ?> Bulan</div></td>
				<td><div><?php echo $package; ?> Paket (<?php echo $package * $majesty_package_detail; ?> Soal)</div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>