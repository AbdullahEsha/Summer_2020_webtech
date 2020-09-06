<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<ul>
        <li><a href="../index.php">Home</a></li>
        <li><a class="active" href="login.php">Login</a></li>
        <li><a class="active" href="register.php">SignUp</a></li>
    </ul>

	<form action="../php/regCheck.php" method="post">
		<div >
			User Name
			<br>
		    <input type="text" name="username" size="60%">
		    <br>	
			Password<br>
			<input type="password" name="password" size="60%">
			<br>
			Email<br>
			<input type="text" name="email" size="60%">
			<br>
			<hr>
		    <input type="submit" name="submit" value="Confirm">     <a id="A" href="../index.php">HOME</a>
		</div>	
	</form>
</body>
</html>