<?php
	session_start();

	if(isset($_POST['submit'])){

		
		$itemName = $_POST['itemName'];
		$quantity = $_POST['quantity'];
		$inTime = $_POST['inTime'];
		$outTime = $_POST['outTime'];

		if(empty($itemName) || empty($quantity) || empty($inTime) || empty($outTime))
		{
			echo "please submit all information".'<a href="home.php"><u>Home</a>';
		}
		else
		{
		$user = ['itemName'=> $itemName,'quantity'=> $quantity,'inTime'=> $inTime,'outTime'=> $outTime];

			
		$_SESSION['itemName']   = $itemName;
		$_SESSION['quantity']   = $quantity;
		$_SESSION['inTime'] 	= $inTime;
		$_SESSION['outTime'] 	= $outTime;
		$_SESSION['user'] 		= $user;

			
		setcookie('itemName', $itemName, time()+3600, '/');
		setcookie('quantity', $quantity, time()+3600, '/');
		setcookie('inTime', $inTime, time()+3600, '/');
		setcookie('outTime', $outTime, time()+3600, '/');
			
		echo "Cookie set.";

		//var_dump($_COOKIE);
		header('location: check_in_out.php');
		}

	}else{
		echo "Cookie not set.";
}
?>