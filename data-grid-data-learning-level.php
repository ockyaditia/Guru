		<table id="data-grid-data-learning-level" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'learning_level'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM learning_level";
				
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
					$class = htmlentities($data['class']);
					$age = htmlentities($data['age']);
					$description = htmlentities($data['description']);
					$img = htmlentities($data['img']);
			?>
			<tr id="<?php echo $code; ?>">
				<td><div><?php echo $name; ?></div></td>
				<td><div><?php echo $class; ?></div></td>
				<td><div><?php echo $age; ?></div></td>
				<td><div><?php echo $description; ?></div></td>
				<td><div><img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $name; ?>" width="200px" height="100px"></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>