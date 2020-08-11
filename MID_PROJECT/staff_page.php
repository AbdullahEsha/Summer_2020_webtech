
<!DOCTYPE html>
<php>
<head>
  <title></title>
</head>
<body>
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
  <tr >
    <td colspan="2" width="900px"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="staff_page.php"><?=$_COOKIE['userName']?></a>|
        <a href="logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px" align="center">
  	<td>
		<ul>
			<p><a href="#"> Work Schedule </a></p>
			<p><a href="#"> Food Order List </a> </p>
			<p><a href="#"> Room-Service List </a></p>
			<p><a href="#"> Salary </a> </p>
			<p><a href="#"> Salary With Bonus </a></p>
			<p><a href="#"> Feedback </a></p>
		</ul>
	</td>
    <td>
        Welcome <?=$_COOKIE['userName']?>
    </td>
  </tr>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>

</body>
</html>