		<table id="data-grid-data-quiz" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'quiz'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM quiz";
				
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
				<th><div style="width: 95px; word-wrap: break-word;"><?php echo strtoupper($columnName); ?></div></th>
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
					$question = $data['question'];
					$answer = $data['answer'];
					$option_a = $data['option_a'];
					$option_b = $data['option_b'];
					$option_c = $data['option_c'];
					$option_d = $data['option_d'];
					$option_e = $data['option_e'];
					$video = $data['video'];
			?>
			<tr id="<?php echo $code; ?>">
				<td><div style="width: 95px; word-wrap: break-word;"><?php echo $class; ?></div></td>
				<td><div style="width: 95px; word-wrap: break-word;"><?php echo $subject; ?></div></td>
				<td><div style="width: 95px; word-wrap: break-word;"><?php echo $question; ?></div></td>
				<td><div style="width: 95px; word-wrap: break-word;"><?php echo $answer; ?></div></td>
				<td><div style="width: 95px; word-wrap: break-word;"><?php echo $option_a; ?></div></td>
				<td><div style="width: 95px; word-wrap: break-word;"><?php echo $option_b; ?></div></td>
				<td><div style="width: 95px; word-wrap: break-word;"><?php echo $option_c; ?></div></td>
				<td><div style="width: 95px; word-wrap: break-word;"><?php echo $option_d; ?></div></td>
				<td><div style="width: 95px; word-wrap: break-word;"><?php echo $option_e; ?></div></td>
				<td><div style="width: 95px; word-wrap: break-word;"><a href="video/<?php echo $video; ?>">Video <?php echo $subject; ?></a></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>