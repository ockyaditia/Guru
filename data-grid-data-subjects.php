		<table id="data-grid-data-subjects" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'subjects'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM subjects";
				
				if (!$result_data = $mysqli->query($sql_data)) {
					$message = "Error.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			?>
			<tr>
				<?php
					while ($data_column_name = $result_column_name->fetch_assoc()) {
						$columnName = $data_column_name['COLUMN_NAME'];
						
						if ($columnName != 'code' && $columnName != 'rating') {
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
					$name = $data['name'];
					$class = $data['class'];
					$category = $data['category'];
					$description = $data['description'];
					$seat = $data['seat'];
					$price = $data['price'];
					$time = $data['time'];
					$img = $data['img'];
			?>
			<tr id="<?php echo $code; ?>">
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $name; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $class; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $category; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $description; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $seat; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $price; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><?php echo $time; ?></div></td>
				<td><div style="width: 140px; word-wrap: break-word;"><img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $name; ?>" width="200px" height="100px"></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>