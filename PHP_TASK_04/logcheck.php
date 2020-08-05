<?php
	session_start();
	//var_dump($_COOKIE);
	//var_dump($_SESSION);

	if(isset($_POST['submit'])){

		$uname 		= $_POST['userName'];
		$password 	= md5($_POST['pass']);

		if(empty($uname) || empty($password) ){
			echo "null submission found!";
		}else{
			if(isset($_COOKIE['userName']) && isset($_COOKIE['pass'])){
				if($uname == $_COOKIE['userName'] && $password == md5($_COOKIE['pass'])){
					
					setcookie('status', "OK", time()+3600, '/');
					header('location: dashBoard.php');

				}else{
					header('location: login.php?msg=sorry_invalid_username/password');
				}
			}else{
				echo "don't have any account!";
			}
		}	

	}else{
		header('location: login.php?msg=submit_button_error');
	}
?>