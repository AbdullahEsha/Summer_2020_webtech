<?php
$idErr="";
if(isset($_GET['id']))
{
	$a=(int)($_GET['id']);
	if ($a<1) 
	{
		$idErr="id invalid";
	}
}
if (isset($_GET['upload'])) 
{
	$a=$_GET['upload'];
	if(empty($a)) 
	{
		$idErr="id invalid";
	}
}
if (isset($_GET['submit'])){
	if ($idErr == ""){
	echo $a;
}
else
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
	<form>
		<fieldset>
			<legend>Profile Picture</legend>
			<pre class="tab">User Id  <input type="text" name="id"></pre>
			<pre class="tab">Picture <input type="file" name="upload"></pre><br>
			<hr>
			<input type="submit" name="submit"><br>
		</fieldset>
	</form>
</body>
</html>