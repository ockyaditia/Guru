		<table id="data-grid-data-user" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'user_access'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM user_access";
				
				if (!$result_data = $mysqli->query($sql_data)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
			?>
			<tr>
				<?php
					while ($data_column_name = $result_column_name->fetch_assoc()) {
						$columnName = $data_column_name['COLUMN_NAME'];
						
						if ($columnName != 'code' && $columnName != 'password') {
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
					$email = htmlentities($data['email']);
					$name = htmlentities($data['name']);
					$status = htmlentities($data['status']);
					$phone_number = htmlentities($data['phone_number']);
					$facebook = htmlentities($data['facebook']);
					$twitter = htmlentities($data['twitter']);
					$instagram = htmlentities($data['instagram']);
			?>
			<tr id="<?php echo $code; ?>">
				<td><div><?php echo $email; ?></div></td>
				<td><div><?php echo $name; ?></div></td>
				<td><div><?php echo $status; ?></div></td>
				<td><div><?php echo $phone_number; ?></div></td>
				<td><div><?php echo $facebook; ?></div></td>
				<td><div><?php echo $twitter; ?></div></td>
				<td><div><?php echo $instagram; ?></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>