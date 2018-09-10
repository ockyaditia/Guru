		<table id="data-grid-data-payment" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'payment'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM payment";
				
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
					$bank_name = htmlentities($data['bank_name']);
					$account_name = htmlentities($data['account_name']);
					$account_number = htmlentities($data['account_number']);
					$img = htmlentities($data['img']);
			?>
			<tr id="<?php echo $code; ?>">
				<td><div><?php echo $bank_name; ?></div></td>
				<td><div><?php echo $account_name; ?></div></td>
				<td><div><?php echo $account_number; ?></div></td>
				<td><div><img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $account_name; ?>" width="200px" height="100px"></div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>