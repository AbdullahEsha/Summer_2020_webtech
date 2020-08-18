<?php
	require_once('../php/session_header.php');
	require_once('../service/userservice.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Company List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>User list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Company Name</td>
			<td>Profile Description</td>
			<td>Industry</td>
			<td>Company Website</td>
			<td>Logo</td>
			<td>Account Id</td>
			<td>Action</td>
		</tr>

		<?php  
			$company = getAllCompany();
			for ($i=0; $i != count($company); $i++) {  ?>
		<tr>
			<td><?=$company[$i]['id']?></td>
			<td><?=$company[$i]['company_name']?></td>
			<td><?=$company[$i]['profile_description']?></td>
			<td><?=$company[$i]['industry']?></td>
			<td><?=$company[$i]['company_website']?></td>
			<td><img height="128px" src="<?=$company[$i]['company_logo']?>"></td>
			<td><?=$company[$i]['user_account_id']?></td>
			<td>
				<a href="edit_com.php?id=<?=$company[$i]['id']?>">Edit</a> |
				<a href="delete_com.php?id=<?=$company[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>
				