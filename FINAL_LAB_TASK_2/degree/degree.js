function validateDegree(){

  if(document.getElementById('ssc').checked || document.getElementById('hsc').checked || document.getElementById('bsc').checked)
  {
    return true;
  }
  else
  {
  	alert('can not be empty!!');
    return false;
  }
}