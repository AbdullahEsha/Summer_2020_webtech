<?php


if (isset($_POST['submit']))
 {
 $dob=$_POST['day']."/".$_POST['month']."/".$_POST['year'];

 if($_POST['day']==""|| $_POST['month']=="" ||$_POST['year']=="")
 {
   echo "Invalid!!";
 }
 else{
   echo $dob;
 }
 
}
?>