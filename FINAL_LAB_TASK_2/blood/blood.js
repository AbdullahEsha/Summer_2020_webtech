function validateBlood()
{
   var blood = document.getElementById('B').value;

  if(blood==""){
    alert("blood error!!");
    return false;
  }
  else
  {
    return true;
  }
}