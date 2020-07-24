<?php
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
?>


<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="ssc" value="SSC">SSC
			<input type="checkbox" name="hsc" value="HSC">HSC
			<input type="checkbox" name="bsc" value="BSc">BSc
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>