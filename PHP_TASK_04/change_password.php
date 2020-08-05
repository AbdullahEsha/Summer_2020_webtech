<?php
if(isset($_POST['submit']))
{
    if($_COOKIE['pass']==$_POST['conpass'])
    {
        if($_POST['newpass']==$_POST['conpass'])
        {
            setcookie('pass', $_POST['newpass'], time()+3600, '/');
            header('location: login.php');
        }
        else
        {
            echo "Doesn't match";
        }
    }
    else
    {
        echo "please recheck your password";
    }
}
?>
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
        <a href="dashBoard.php"><?=$_COOKIE['name']?></a>|
        <a href="login.php">Logout</a>
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
        <fieldset>
            <legend><b>CHANGE PASSWORD</b></legend>
            <form>
                <table>
                    <tr>
                        <td><font size="3">Current Password</font></td>
                        <td>:</td>
                        <td><input type="password" name="pass" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><font size="3" color="green">New Password</font></td>
                        <td>:</td>
                        <td><input type="password" name="newpass" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><font size="3" color="red">Retype New Password</font></td>
                        <td>:</td>
                        <td><input type="password" name="conpass" /></td>
                        <td></td>
                    </tr>
                </table>
                <hr />
                <input type="submit" name="submit" value="Submit" />
            </form>
        </fieldset>
    </td>
    <tr>
        <td colspan="2" align="center">copyright@2017</td>
    </tr>
</table>

</body>
</html>