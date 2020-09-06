<?php

if (isset($_POST['submit'])) {

	echo $_POST['name']."<br>";
	echo $_POST['email']."<br>";
	echo $_POST['gender']."<br>";
	echo $_POST['day']."/".$_POST['month']."/".$_POST['year']."<br>";
	echo $_POST['bg']."<br>";
	if($_POST['ssc']!=""){
		echo $_POST['ssc']."<br>";
	}
	if($_POST['hsc']!=""){
		echo $_POST['hsc']."<br>";
	}
	if($_POST['bsc']!=""){
		echo $_POST['bsc']."<br>";
	}

	

	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<img src="<?=$_POST['upload']?>">
</body>
</html>