window.fbAsyncInit = function() {
	FB.init({
	  appId      : '1503132836501637',
	  status	 : true,
	  cookie     : true,  // enable cookies to allow the server to access 
						  // the session
	  xfbml      : true,  // parse social plugins on this page
	  version    : 'v3.1' // use graph api version 3.1
	});
	
	FB.getLoginStatus(function(response) {
	  if (response.status === 'connected') {
		  FB.logout(function(response) {
		  });
	  }
	});

	FB.Event.subscribe('auth.login', function(){
		
		FB.api('/me', function(response) {
		  document.getElementById('facebook-id').value = response.id;
		  document.getElementById('facebook-name').value = response.name;
		  document.getElementById('facebook-email').value = response.email;
		  document.getElementById('facebook-facebook').value = '';
		  
		  FB.getLoginStatus(function(response) {
			//document.getElementById('facebook-status').innerHTML = response.status;
			if (response.status === 'connected') {
			  var facebook_click = document.getElementById('facebook-click');
			  facebook_click.click();
			}
		  });
		});
	});

};

// Load the SDK asynchronously
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "https://connect.facebook.net/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function login() {
	FB.login(function(response) {
	}, {scope: 'public_profile,email'});            
}

function logout() {
	FB.logout(function(response) {
	});
}