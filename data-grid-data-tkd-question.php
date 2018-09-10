		<table id="data-grid-data-tkd-question" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'tkd_question'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM tkd_question";
				
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
					$subject = htmlentities($data['subject']);
					$question = htmlentities($data['question']);
					$answer = htmlentities($data['answer']);
					$option_a = htmlentities($data['option_a']);
					$option_b = htmlentities($data['option_b']);
					$option_c = htmlentities($data['option_c']);
					$option_d = htmlentities($data['option_d']);
					$option_e = htmlentities($data['option_e']);
					$book = htmlentities($data['book']);
					$video = htmlentities($data['video']);
			?>
			<tr id="<?php echo $code; ?>">
				<td><div><?php echo $subject; ?></div></td>
				<td><div><?php echo $question; ?></div></td>
				<td><div><?php echo $answer; ?></div></td>
				<td><div><?php echo $option_a; ?></div></td>
				<td><div><?php echo $option_b; ?></div></td>
				<td><div><?php echo $option_c; ?></div></td>
				<td><div><?php echo $option_d; ?></div></td>
				<td><div><?php echo $option_e; ?></div></td>
				<td><div><a href="pdf/<?php echo $book; ?>">Buku</a></div></td>
				<td><div><a href="video/<?php echo $video; ?>">Video</a></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>