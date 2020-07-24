<?php

if (isset($_GET['bloodGroup'])) {
	echo $_GET['bloodGroup'];
}
?>

<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			Blood Group
			<select name="bloodGroup">
				<option>A+</option>
				<option>B+</option>
				<option>O+</option>
				<option>A-</option>
				<option>B-</option>
				<option>O-</option>
			</select>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>