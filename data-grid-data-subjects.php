		<table id="data-grid-data-subjects" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'subjects'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM subjects";
				
				if (!$result_data = $mysqli->query($sql_data)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
			?>
			<tr>
				<?php
					while ($data_column_name = $result_column_name->fetch_assoc()) {
						$columnName = $data_column_name['COLUMN_NAME'];
						
						if ($columnName != 'code' && $columnName != 'rating') {
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
					$category = htmlentities($data['category']);
					$description = htmlentities($data['description']);
					$seat = htmlentities($data['seat']);
					$price = htmlentities($data['price']);
					$time = htmlentities($data['time']);
					$img = htmlentities($data['img']);
			?>
			<tr id="<?php echo $code; ?>">
				<td><div><?php echo $name; ?></div></td>
				<td><div><?php echo $class; ?></div></td>
				<td><div><?php echo $category; ?></div></td>
				<td><div><?php echo $description; ?></div></td>
				<td><div><?php echo $seat; ?></div></td>
				<td><div><?php echo $price; ?></div></td>
				<td><div><?php echo $time; ?></div></td>
				<td><div><img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $name; ?>" width="200px" height="100px"></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>