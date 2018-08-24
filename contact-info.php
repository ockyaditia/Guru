			<div class="contact-info">
				<?php
					if (isset($email) && isset($status) && $status == "Admin") {
				?>
				<form action="query/admin-update-data-info.php" method="post" enctype="multipart/form-data">
					<input type="hidden" id="code_old" name="code_old" value="<?php echo $code_info; ?>">
					<a href="#"><span>Telepon:</span> <input type="text" id="phone" name="phone" placeholder="Telepon" value="<?php echo $phone_info; ?>"></a>
					<a href="#"><span>Email:</span> <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $email_info; ?>"></a>
					<button class="btn clever-btn">Ubah</button>
				</form>
				<?php
					} else {
				?>
                <a href="#"><span>Telepon:</span> <?php echo $phone_info; ?></a>
                <a href="mailto:<?php echo $email_info; ?>"><span>Email:</span> <?php echo $email_info; ?></a>
				<?php
					}
				?>
            </div>