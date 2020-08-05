<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr >
    <td colspan="2" width="900px"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="profile.php"><?=$_COOKIE['name']?></a>|
        <a href="logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px">
  	<td>
		<ul>
			<li><a href="dashBoard.php"> Dashboard </a></li>
			<li><a href="profile.php"> View Profile </a></li>
			<li><a href="editProfile.php"> Edit Profile </a> </li>
			<li><a href="picture.php"> Change Profile Picture </a></li>
			<li><a href="change_password.php"> Change Password </a></li>
			<li><a href="logout.php"> Logout </a> </li>
		</ul>
	</td>
	<td width="60%">
		<h1>
            Welcome <?=$_COOKIE['name']?>      
        </h1>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>

</body>
</html>