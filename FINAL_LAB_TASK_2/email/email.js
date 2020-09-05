function validateEmail(){
	var email = document.getElementById('email').value;

	if(email==""){
		document.getElementById('msg').innerHTML="can't be empty!";
		return false;
	}
	else
		return true;
}