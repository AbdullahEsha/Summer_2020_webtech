<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = "";
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  }else {
    $name = test_input($_POST["name"] );
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name ) ){
      $nameErr = "please start with letters";
    }
    if (strlen($name) < 2) {
      $nameErr = "input more then 2 latter";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Inputs:</h2>";
if($nameErr == "")
    echo $name;
else
	echo "invalid";
?>

</body>
</html>