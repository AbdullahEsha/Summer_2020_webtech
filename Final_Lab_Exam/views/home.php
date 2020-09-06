<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/create.php">Create New Admin</a> |
	<a href="../views/all_users.php">Admin List</a> |
	<a href="../views/create_company.php">Create New Author</a> |
	<a href="../views/all_companies.php">Author List</a> |
	<a href="../php/logout.php">Logout</a> 
</body>
</html>