<?php
$err="";

  $dd="";
  $mm="";
  $yy="";
  if (isset($_GET['date']))
  {
    $dd=(int)$_GET['date'];
    if ($dd>0 && $dd<=31){}
    else
    {
      $err="invalid";
    }
  }

  if (isset($_GET['month']))
  {
    $mm=(int)$_GET['month'];
    if ($mm>0 && $mm<=12){}
    else
    {
      $err="invalid";
    }
  }
  if (isset($_GET['year'])) 
  {
    $yy=(int)$_GET['year'];
    if ($yy>=1900 && $yy<=2016){}
    else
    {
      $err="invalid";
    }
  }
  if($err=="")
  {
    echo $dd."<br>";
    echo $mm."<br>";
    echo $yy."<br>";
  }
  if ($err!="") 
  {
    echo "invalid";
  }

?>
<html>
<head>
  <title></title>
</head>
<body>
  <form>
    <fieldset>
            <legend>Date of Birth</legend>
            <table>
                <tr>
                   <td width="60px">dd</td>
                   <td width="60px">mm</td>
                   <td>yyyy</td>
                </tr>
            </table>
            <input type="text" name="date" size="2" required>/
            <input type="text" name="month" size="2" required>/
            <input type="text" name="year" size="3" required><br>
            <hr>
            <input type="submit" name="submit">
        </fieldset>  

  </form>

</body>
</html>