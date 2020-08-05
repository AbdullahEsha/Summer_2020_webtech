<?php

if(isset($_POST['submit']))
{
  if($_COOKIE['email']==$_POST['email'])
  {
      header('location: login.php');
      echo $_COOKIE['pass'];
  }
  else
  {
    echo "Error";
  }
}
else
{
  echo "Error";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
  <tr>
    <td width="800px"><h2>Xcompany</h2> 
      <ul align="right">
        <a href="publicHome.php">Home</a>|
        <a href="login.php">Login</a>|
        <a href="registration.php">Registration</a>
      </ul>
    </td>
  </tr>

  <tr height="300px">
    <td>
      <form>
        <fieldset width="500px">
          <legend>FORGOT PASSWORD</legend>
          <table>
            <tr>
              <td>Enter Email</td>
              <td>: <input type="email" name="email"></td>
            </tr>
          </table>
          <hr>
          <input type="submit" name="submit">
        </fieldset>
      </form>
    </td>
  </tr>

  <tr>
    <td align="center">copyright@2017</td>
  </tr>
</table>

</body>
</html>