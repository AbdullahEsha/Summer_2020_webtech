<?php
$err ="";
$name ="";

  if (isset($_GET['name']))
  {
    $name = $_GET['name'];
    if (empty($name)){
            $err= "cannot be empty";
    }
    if (!preg_match("/^[a-zA-Z ]*$/", $name)){
            $err= "invalid characters";
    }
    if (strlen($name) < 2){
            $err= "invalid";
    }
}
  if($err=="")
  {
    echo $name."<br>";
  }
  else
  {
    echo "invalid";
  }

?>

<html>
<head>
  <title></title>
</head>
<body>
  <form method="get">  
  Name: <input type="text" name="name">
  <br><br>
  <button type="submit">Submit</button> 
</form>
</body>
</html>