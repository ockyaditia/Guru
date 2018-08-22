<html>
	<script src="js/facebook.js"></script>
	<script src="js/google.js"></script>
	<script>
		var facebook_click = document.getElementById('facebook-click');
		facebook_click.click();
		
		var auth2 = gapi.auth2.getAuthInstance();
		auth2.signOut().then(function () {
		  alert('User signed out.');
		});
	</script>
	
	<div id="facebook_click" class="fb-login-button w-100" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
</html>
<?php
	session_start();
	 
	session_destroy();
	 
	header('location:index.php');
?>