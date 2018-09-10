		<table id="data-grid-data-ebook" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'e_book'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM e_book";
				
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
					$class = htmlentities($data['class']);
					$subject = htmlentities($data['subject']);
					$publisher = htmlentities($data['publisher']);
					$description = htmlentities($data['description']);
					$file_name = htmlentities($data['file_name']);
					$img = htmlentities($data['img']);
			?>
			<tr id="<?php echo $code; ?>">
				<td><div><?php echo $class; ?></div></td>
				<td><div><?php echo $subject; ?></div></td>
				<td><div><?php echo $publisher; ?></div></td>
				<td><div><?php echo $description; ?></div></td>
				<td><div><a href="pdf/<?php echo $file_name; ?>">E-Book <?php echo $subject; ?></a></div></td>
				<td><div><img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $subject; ?>" width="200px" height="100px"></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>