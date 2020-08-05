<?php
    $gender=$_COOKIE['gender'];
    $dob=$_COOKIE['day']."/".$_COOKIE['month']."/".$_COOKIE['year'];
?>
<!DOCTYPE html>
<php>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr >
    <td colspan="2" width="900px"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="dashBoard.php"><?=$_COOKIE['name']?></a>|
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
		<form>
            <fieldset>
                <legend>PROFILE</legend>
            	<form>
            		<br/>
            		<table cellpadding="7" cellspacing="0">
            			<tr>
            				<td>Name</td>
            				<td>:</td>
            				<td><?=$_COOKIE['name']?></td>
            				<td rowspan="7" align="center">
            					<img width="128px" align="left" src="img/6.jpg"/>
                                <br/>
                                <a href="picture.php">Change</a>
            				</td>
            			</tr>		
            			<tr><td colspan="3"><hr/></td></tr>
            			<tr>
            				<td>Email</td>
            				<td>:</td>
            				<td><?=$_COOKIE['email']?></td>
            			</tr>		
            			<tr><td colspan="3"><hr/></td></tr>			
            			<tr>
            				<td>Gender</td>
            				<td>:</td>
            				<td><?php echo $gender ?></td>
            			</tr>
            			<tr><td colspan="3"><hr/></td></tr>
            			<tr>
            				<td>Date of Birth</td>
            				<td>:</td>
            				<td><?php echo $dob ?></td>
            			</tr>
            		</table>	
                    <hr/>
                    <a href="editProfile.php">Edit Profile</a>	
            	</form>
            </fieldset>
        </form>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>
</body>
</html>