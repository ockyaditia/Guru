var googleUser = {};
var startApp = function() {
gapi.load('auth2', function(){
  // Retrieve the singleton for the GoogleAuth library and set up the client.
  auth2 = gapi.auth2.init({
	client_id: '803235796704-ote9qqj3qefe1pce0amuoqediu1olrck.apps.googleusercontent.com',
	cookiepolicy: 'single_host_origin',
	// Request scopes in addition to 'profile' and 'email'
	//scope: 'additional_scope'
  });
  attachSignin(document.getElementById('google-click'));
});
};

function attachSignin(element) {
console.log(element.id);
auth2.attachClickHandler(element, {},
	function(googleUser) {
	  var profile = googleUser.getBasicProfile();
	  var id_token = googleUser.getAuthResponse().id_token;
	  
	  //document.getElementById('google-status').innerText = "Signed in: " + profile.getName();
	  document.getElementById('google-id').value = profile.getId();
	  document.getElementById('google-name').value = profile.getName();
	  document.getElementById('google-email').value = profile.getEmail();
	  
	  var google_login = document.getElementById('google-login');
	  google_login.click();
	}, function(error) {
	  alert(JSON.stringify(error, undefined, 2));
	});
}