<?php
function NameTest(){
$err ="";
$name ="";

  if (isset($_GET['name']))
  {
    $name = $_GET['name'];
    if (empty($name)){
            $err= "cannot be empty";
    }
    if (!preg_match("/^[a-zA-Z ]*$/", $name)){
            $err= "invalid characters";
    }
    if (strlen($name) < 2){
            $err= "invalid";
    }
}
  if($err=="")
  {
    echo $name."<br>";
  }
  else
  {
    echo "invalid";
  }
}

function EmailTest(){
	if(isset($_GET['email'])){
	$email=$_GET['email'];
	if($email==""){
		echo "sorry!! can't be empty.";
	}

}
}

function GenderTest(){
if(isset($_GET['gender'])){
	$gender=$_GET['gender'];
	echo $gender;
}
else
{
	if(isset($_GET['submit'])){
		echo "select one please";
	}
}
}

function DOBTest(){
$err="";

  $dd="";
  $mm="";
  $yy="";
  if (isset($_GET['date']))
  {
    $dd=(int)$_GET['date'];
    if ($dd>0 && $dd<=31){}
    else
    {
      $err="invalid";
    }
  }

  if (isset($_GET['month']))
  {
    $mm=(int)$_GET['month'];
    if ($mm>0 && $mm<=12){}
    else
    {
      $err="invalid";
    }
  }
  if (isset($_GET['year'])) 
  {
    $yy=(int)$_GET['year'];
    if ($yy>=1900 && $yy<=2016){}
    else
    {
      $err="invalid";
    }
  }
  if($err=="")
  {
    echo $dd."<br>";
    echo $mm."<br>";
    echo $yy."<br>";
  }
  if ($err!="") 
  {
    echo "invalid";
  }
}
?>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
  <tr>
    <td width="800px"><h1>X HOTEL</h1>
      <h2 align="right">
        <a href="home.php">Home</a> ||
        <a href="login.php">Login</a> ||
        <a href="registration.php">Registration</a> ||
        <a href="cv.php"> Apply For CV</a>
      </h2>
    </td>
  </tr>

  <tr height="500px">
    <td>
        <fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form action="regCheck.php" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"><?php NameTest();?></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text"></td>
				<td></td>
			</tr>

			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Type</td>
				<td>:</td>
				<td>
					<select name="userType">
						<option>Manager</option>
				        <option>Staff</option>
			        </select>
				<td></td>
			</tr>

			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
					<?php EmailTest();?>
				</td>
				<td></td>
			</tr>		
				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="pass" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio">Male
						<input name="gender" type="radio">Female
						<input name="gender" type="radio">Other
						<?php GenderTest();?>
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" name="day"/>/
						<input type="text" size="2" name="month" />/
						<input type="text" size="4" name="year" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
						<?php DOBTest();?>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit">
		<input type="reset">
	</form>
</fieldset>
    </td>
  </tr>

  <tr>
    <td align="center">copyright@2017</td>
  </tr>
</table>

</body>
</html>