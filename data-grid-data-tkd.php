		<table id="data-grid-data-tkd" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'tkd'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM tkd";
				
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
			?>
			<tr id="<?php echo $code; ?>">
				<td><div><?php echo $name; ?></div></td>
				<td><div><?php echo $description; ?></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>