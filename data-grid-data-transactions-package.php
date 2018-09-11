		<table id="data-grid-data-transactions-package" class="testgrid">
			<?php
				$sql_column_name = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".$dbname."' AND TABLE_NAME = 'transactions_package'";
				
				if (!$result_column_name = $mysqli->query($sql_column_name)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
				}
				
				$sql_data = "SELECT * FROM transactions_package";
				
				if (!$result_data = $mysqli->query($sql_data)) {
					$message = "Error.";
					//echo "<script type='text/javascript'>alert('$message');</script>";
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
					$code = htmlentities($data['code']);
					$user_code = htmlentities($data['user_code']);
					$package_code = htmlentities($data['package_code']);
					$payment_code = htmlentities($data['payment_code']);
					$bank_name = htmlentities($data['bank_name']);
					$account_name = htmlentities($data['account_name']);
					$account_number = htmlentities($data['account_number']);
					$img = htmlentities($data['img']);
					$approval = htmlentities($data['approval']);
			?>
			<tr id="<?php echo $code; ?>">
				<td><div><?php echo $user_code; ?></div></td>
				<td><div><?php echo $package_code; ?></div></td>
				<td><div><?php echo $payment_code; ?></div></td>
				<td><div><?php echo $bank_name; ?></div></td>
				<td><div><?php echo $account_name; ?></div></td>
				<td><div><?php echo $account_number; ?></div></td>
				<td><div><img src="img/bg-img/<?php echo $img; ?>" alt="<?php echo $account_name; ?>" width="200px" height="100px"></div></td>
				<td><div>
				<?php
					if ($approval == 1) {
				?>
						<a href="query/admin-update-data-transactions-package.php?update=<?php echo $code; ?>&approval=3"><img src="img/core-img/accept.png" alt="Terima" width="25px" height="25px"></a>
						&nbsp;<a href="query/admin-update-data-transactions-package.php?update=<?php echo $code; ?>&approval=2"><img src="img/core-img/reject.png" alt="Tolak" width="25px" height="25px"></a>
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