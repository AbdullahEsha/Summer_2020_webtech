<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
  <tr>
    <td colspan="2"><h1>X HOTEL</h1> 
      <h2 align="right">
        <a href="home.php">Home</a> ||
        <a href="login.php">Login</a> ||
        <a href="registration.php">Registration</a> ||
        <a href="cv.php"> Apply For CV</a>
      </h2>
    </td>
  </tr>

  <tr>
    <td>
      <img src="hotel3.jpg" height="100%" width="100%">
    </td>
    <td width="50%">
      <form action="logcheck.php" method="post">
        <fieldset>
          <legend>LOGIN</legend>
          <table>
            <tr>
              <td>User Name</td>
              <td>: <input type="text" name="userName"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>: <input type="Password" name="pass"></td>
            </tr>
          </table>
          <hr>
          <input type="submit" name="submit"><a href="forgotPassword.php">Forgot Password</a>
        </fieldset>
      </form>
    </td>
  </tr>

  <tr>
    <td colspan="2" align="center">copyright@2017</td>
  </tr>
</table>

</body>
</html>