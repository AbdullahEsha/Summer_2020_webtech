<?php
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
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset >
		<legend> Gender </legend>
			<input type="radio" name="gender" value="Male">Male 
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Other">Other
			<br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>