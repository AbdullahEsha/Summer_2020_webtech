function validatePhoto(){
	var id = document.getElementById('id').value;
	var pic = document.getElementById('upload').value;

	if(id== "" || pic == ""){
		alert('can not be empty!!!');
		return false;
	}
	return true;
}