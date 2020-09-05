function validateDegree(){

  if(!document.getElementById('ssc').checked && !document.getElementById('hsc').checked && !document.getElementById('bsc').checked)
  {
    document.getElementById('degreemsg').innerHTML="Please choose an option";
    return false;
  }
  else
  {
    return true;
  }
}