
<?php

	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "INSERT INTO `users`(`id`, `username`, `password`, `email`, `type`) VALUES (,'$username','$password','$email',) ";

	$result = mysqli_query($conn, $sql);

	$data = "";
	

	echo $data;

?>