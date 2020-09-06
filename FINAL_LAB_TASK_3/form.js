function val()
{
  var name1=false;
  var userName=document.getElementById('name').value;
  
  
  if(userName=="")
  {
    document.getElementById('namemsg').innerHTML="cannot be empty";
    name1=false;
  }
  else
  {
    if((userName[0]>='A' && userName[0]<='Z') ||(userName[0]>='a' && userName[0]<='z'))
    {
      if(userName.length>=2)
      {
        var i=0;
        while(i<userName.length)
        {
          if(!((userName[i]>='A' && userName[i]<='Z') ||(userName[i]>='a' && userName[i]<='z') || userName[i]=='.' || userName[i]=='-' || userName[i]==' '))
          {
            document.getElementById('namemsg').innerHTML="Invalid!!";
            name1=false;
          }
          i=i+1;
        }
        document.getElementById('namemsg').innerHTML="";
        name1=true;
      }
      else
      {
        document.getElementById('namemsg').innerHTML="at least 2 words";
        name1=false;
      }
    }
    else
    {
      document.getElementById('namemsg').innerHTML="Must start with a letter";
      name1=false;
    }
  }

  var email=document.getElementById('email').value;
  var email1=false;
  if (email == "")
  {
    document.getElementById('emailmsg').innerHTML="Must be filled up";
    email1 = false;
  }
  else
  {
    document.getElementById('emailmsg').innerHTML="";
    email1=true;
  }


  var gender1=false;
  if(document.getElementById('gen1').checked || document.getElementById('gen2').checked ||document.getElementById('gen3').checked) 
  {
    document.getElementById('gendermsg').innerHTML="" ;
    gender1 = true;
  }
  else { 
    document.getElementById("gendermsg").innerHTML="select any!!!!";
    gender1 = false;
  } 

  var dob1=false;
  var day=document.getElementById('day').value;
  var month=document.getElementById('month').value;
  var year=document.getElementById('year').value;
  if((day!="") && (month!="") && (year!=""))
  {
    if((day>0 && day<32) && (month>0 && month<13) && (year>1899 && year<2017))
    {
      document.getElementById('dobmsg').innerHTML="";
      dob1=true;
    }
    else
    {
      document.getElementById('dobmsg').innerHTML="Invalid!!!";
      dob1=false;
    }
  }
  else
  {
    document.getElementById('dobmsg').innerHTML="Invalid!!!";
    dob1=false;
  }

  var degree1=false;
  if(document.getElementById('ssc').checked || document.getElementById('hsc').checked || document.getElementById('bsc').checked)
  {
    document.getElementById('degreemsg').innerHTML="";
    degree1=true;
  }
  else
  {
    document.getElementById('degreemsg').innerHTML="Invalid!!!";
    degree1=false;
  }

  var picture1=false;
  var pic =document.getElementById('file').value;
  if( pic != "")
  {
    document.getElementById('picmsg').innerHTML="";
    picture1 = true;
  }
  else
  {
    document.getElementById('picmsg').innerHTML="select a picture";
    picture1 = false;
  }

  var blood1=false;
  var blood = document.getElementById('bg').value;
  if( blood != "")
  {
    document.getElementById('bgmsg').innerHTML="";
    blood1 = true;
  }
  else
  {
    document.getElementById('bgmsg').innerHTML="select one!!";
    blood1 = false;
  }


  if(name1 && email1 && gender1 && dob1 && blood1 && degree1 && picture1)
  {
    return true;
  }
  else
  {
    return false;
  }
}

function removername()
{
  var userName =document.getElementById('name').value;
  if(userName!="")
  {
    document.getElementById('namemsg').innerHTML="";
  }
}
function removeremail()
{
  var email =document.getElementById('email').value;
  if(email!="")
  {
    document.getElementById('emailmsg').innerHTML="";
  }
}
function removergender()
{
  document.getElementById('gendermsg').innerHTML="";
}
function removerdob()
{
  var day=document.getElementById('day').value;
  var month=document.getElementById('month').value;
  var year=document.getElementById('year').year;
  
  if(day!="" && month!="" && year!="")
  {
    document.getElementById('dobmsg').innerHTML="";
  }
}
function removerblood(){
  var blood =document.getElementById('bg').value;
  if(blood!="")
  {
    document.getElementById('bgmsg').innerHTML="";
  }
}
function removerdegree()
{
  document.getElementById('degreemsg').innerHTML="";
}
function removerpicture()
{
  document.getElementById('picmsg').innerHTML="";
}

