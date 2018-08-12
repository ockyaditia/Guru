		<table id="data-grid-data-user" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'user_access'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM user_access";
				
				if (!$result_data = $mysqli->query($sql_data)) {
					$message = "Error.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			?>
			<tr>
				<?php
					while ($data_column_name = $result_column_name->fetch_assoc()) {
						$columnName = $data_column_name['COLUMN_NAME'];
						
						if ($columnName != 'code' && $columnName != 'password') {
				?>
				<th><div style="width: 140px; word-wrap: break-word;"><?php echo strtoupper($columnName); ?></div></th>
				<?php
						}
					}
				?>
				<th></th>
			</tr>
			<?php
				while ($data = $result_data->fetch_assoc()) {
					$code = $data['code'];
					$email = $data['email'];
					$name = $data['name'];
					$status = $data['status'];
					$phone_number = $data['phone_number'];
					$facebook = $data['facebook'];
					$twitter = $data['twitter'];
					$instagram = $data['instagram'];
			?>
			<tr id="<?php echo $code; ?>">
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $email; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $name; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $status; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $phone_number; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $facebook; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $twitter; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $instagram; ?></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>