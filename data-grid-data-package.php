		<table id="data-grid-data-package" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'package'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM package";
				
				if (!$result_data = $mysqli->query($sql_data)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
			?>
			<tr>
				<?php
					while ($data_column_name = $result_column_name->fetch_assoc()) {
						$columnName = $data_column_name['COLUMN_NAME'];
						
						if ($columnName != 'code') {
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
			?>
			<tr id="<?php echo $code; ?>">
				<td><div><?php echo $name; ?></div></td>
				<td><div><?php echo $description; ?></div></td>
				<td><div><?php echo $detail; ?></div></td>
				<td><div><?php echo $price; ?></div></td>
				<td><div><?php echo $duration; ?></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>