		<table id="data-grid-data-video" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'video'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM video";
				
				if (!$result_data = $mysqli->query($sql_data)) {
					$message = "Error.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			?>
			<tr>
				<?php
					while ($data_column_name = $result_column_name->fetch_assoc()) {
						$columnName = $data_column_name['COLUMN_NAME'];
						
						if ($columnName != 'code') {
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
					$class = $data['class'];
					$subject = $data['subject'];
					$publisher = $data['publisher'];
					$description = $data['description'];
					$file_name = $data['file_name'];
			?>
			<tr id="<?php echo $code; ?>">
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $class; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $subject; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $publisher; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $description; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><a href="video/<?php echo $file_name; ?>">Video <?php echo $subject; ?></a></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>