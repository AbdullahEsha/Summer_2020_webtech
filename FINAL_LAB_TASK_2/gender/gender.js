function genderValidate(){

	if ( (document.getElementById('1').checked) || (document.getElementById('2').checked) || (document.getElementById('3').checked)){
	
	return true;
    }
    else{
    	alert("Please select one!");
    	return false;
    }
}