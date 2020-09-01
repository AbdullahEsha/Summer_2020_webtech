
<?php

	$name = $_POST['name'];

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from users where username like '%{$name}%'";

	$result = mysqli_query($conn, $sql);

	$data = "";
	

	echo $data;

?>