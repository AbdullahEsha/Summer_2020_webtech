
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" onkeyup="f2()"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit" onclick="f1()">
						<a href="login.php" id="L1" style="display: none">LOGIN</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">
	    function f1(){
	    	document.getElementById('L1').style.display = 'inline';
	    }

	    function f2(){
	    	    var name = document.getElementById('name').value;
				var xhttp = new XMLHttpRequest();
				xhttp.open('POST', 'PhpForJs.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('name='+name);

				xhttp.onreadystatechange = function (){
					if(this.readyState == 4 && this.status == 200){

						if(this.responseText != ""){
							document.getElementById('searchdata').innerHTML = this.responseText;
						}else{
							document.getElementById('searchdata').innerHTML = "";
						}
						
					}	
				}

	    }	
	</script>
</body>
</html>