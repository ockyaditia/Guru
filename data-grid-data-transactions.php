		<table id="data-grid-data-transactions" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'transactions'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM transactions";
				
				if (!$result_data = $mysqli->query($sql_data)) {
					$message = "Error.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			?>
			<tr>
				<?php
					while ($data_column_name = $result_column_name->fetch_assoc()) {
						$columnName = $data_column_name['COLUMN_NAME'];
						
						if ($columnName != 'code' && $columnName != 'timestamp') {
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
					$code = $data['code'];
					$user_code = $data['user_code'];
					$subject_code = $data['subject_code'];
					$payment_code = $data['payment_code'];
					$bank_name = $data['bank_name'];
					$account_name = $data['account_name'];
					$account_number = $data['account_number'];
					$img = $data['img'];
					$approval = $data['approval'];
			?>
			<tr id="<?php echo $code; ?>">
				<td><div><?php echo $user_code; ?></div></td>
				<td><div><?php echo $subject_code; ?></div></td>
				<td><div><?php echo $payment_code; ?></div></td>
				<td><div><?php echo $bank_name; ?></div></td>
				<td><div><?php echo $account_name; ?></div></td>
				<td><div><?php echo $account_number; ?></div></td>
				<td><div><img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $account_name; ?>" width="200px" height="100px"></div></td>
				<td><div>
				<?php
					if ($approval == 1) {
				?>
						<a href="query/admin-update-data-transactions.php?update=<?php echo $code; ?>&approval=3"><img src="img/core-img/accept.png" alt="Terima" width="25px" height="25px"></a>
						&nbsp;<a href="query/admin-update-data-transactions.php?update=<?php echo $code; ?>&approval=2"><img src="img/core-img/reject.png" alt="Tolak" width="25px" height="25px"></a>
				<?php
					} else if ($approval == 3) {
				?>
						Sudah Diterima
				<?php
					} else if ($approval == 2) {
				?>
						Sudah Ditolak
				<?php
					}
				?>
				</div></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>