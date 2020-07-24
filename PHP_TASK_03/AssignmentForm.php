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
	if(isset($_GET['txtemail'])){
	$email=$_GET['txtemail'];
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
function BloodGroupTest(){
if (isset($_GET['bloodGroup'])) {
	echo $_GET['bloodGroup'];
}
}
function DegreeTest(){
if (isset($_GET['ssc']) || isset($_GET['hsc']) || isset($_GET['bsc'])){
	$ssc = $_GET['ssc'];
	if (isset($_GET['ssc'])) {
		echo $ssc."<br>";
	}
	$hsc = $_GET['hsc'];
	if (isset($_GET['hsc'])){
		echo $hsc."<br>";
	}
	$bsc = $_GET['bsc'];
	if (isset($_GET['bsc'])){
		echo $bsc."<br>";
	}
}
else
{
	if (isset($_GET['submit'])) {
		echo "any one must be selected";
	}
}
}
function PhotoTest(){
$idErr="";
if (isset($_GET['upload'])) 
{
	$p=$_GET['upload'];
	if(empty($p)) 
	{
		$idErr="id invalid";
	}
}
if (isset($_GET['submit'])){
	if ($idErr == ""){
	echo $p;
}
else
{
	echo "invalid";
}
}
}

?>

<html>
<head>
	<title></title>
</head>
<body>
		<form action="" method="" >
			<table width="50%" align="center" border="1" cellpadding="5" cellspacing="0">
				<tr>
					<td colspan="3" align="center">	
						<h1>PERSON PROFILE</h1>
					</td>
				</tr>
				<tr>
					<td>	
						Name
					</td>
					<td>
						<input type="text" name="name"><?php NameTest();?> 
					</td>
					<td width="40px">
					</td>
				</tr>
				<tr>
					<td>	
						Email
					</td>
					<td>
						<input type="email" name="txtemail" placeholder="sample@example.com"> <?php EmailTest();?>
					</td>
					<td width="40px">
					</td>
				</tr>
				<tr>
					<td>	
						Gender
					</td>
					<td>
						<input type="radio" name="gender"> Male 
				        <input type="radio" name="gender"> Female
				        <input type="radio" name="gender"> Other
				        <?php GenderTest();?>
					</td>
					<td width="40px">
					</td>
				</tr>
				<tr>
					<td>	
						Date Of Birth
					</td>
					<td>
							<input type="text" size="2px" name="date">/ 
				            <input type="text" size="2px" name="month">/
				            <input type="text" size="2px" name="year">
				            <i>(dd/mm/yyyy)</i> 
				           <?php DOBTest();?> 
					</td>
					<td width="40px">
					</td>
				</tr>
				<tr>
					<td>	
						Blood Group
					</td>
					<td>
							<select name="">
				            <option value="">A+</option>
				            <option value="">A-</option>
				            <option value="">B+</option>
				            <option value="">B-</option>
				            <option value="">O+</option>
				            <option value="">O-</option>
			                </select>
			                <?php BloodGroupTest();?> 
					</td>
					<td width="40px">
					</td>
				</tr>
				</tr>
				<tr>
					<td>	
						Degree
					</td>
					<td>
							<input type="checkbox" name="ssc"> SSC
					        <input type="checkbox" name="hsc"> HSC
					        <input type="checkbox" name="bsc"> BSc
					        <?php DegreeTest();?>
					</td>
					<td width="40px">
					</td>
				</tr>
				<tr>
					<td>	
						Photo
					</td>
					<td colspan="2">
						<input type="file" name="upload">
						<?php PhotoTest();?>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center" height="35px">		
					</td>
				</tr>
				<tr>
					<td colspan="3" align="right">	
						<input type="submit" name="submit" value="Submit"> 
			            <input type="reset" name="reset" value="Clear"> 
					</td>
				</tr>

			</table>
		</form>

</body>
</html>