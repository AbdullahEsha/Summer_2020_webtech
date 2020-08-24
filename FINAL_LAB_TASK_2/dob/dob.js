function validateDOB()
{
   var dd = document.getElementById('dd').value;
   var mm = document.getElementById('mm').value;
   var yy = document.getElementById('yy').value;

  if((dd !="" ) && (mm !="") && (mm !="")){
      if(dd>0 && dd<31){

        if(mm>0 &&mm<13){

          if(yy>1900 &&yy<2016){
            return true;
          }
          else{
            alert("year error!!");
            return false;
          }
        }
        else{
          alert("month error!!");
          return false;
        }
      }
      else{
        alert("day error!!");
        return false;
      }
    }
    else
    {
      alert("Null input!!");
      return false;
    }
}