<html>
	<script src="js/facebook.js"></script>
	<script>
		var facebook_click = document.getElementById('facebook-click');
		facebook_click.click();
	</script>
	
	<div id="facebook_click" class="fb-login-button w-100" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
</html>
<?php
	session_start();
	 
	session_destroy();
	 
	header('location:index.php');
?>