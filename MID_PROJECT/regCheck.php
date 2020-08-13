<?php
    
    if(isset($_POST['submit'])){
    	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
        $query = "INSERT INTO userInfo (name, userName, email, password, dateOfBirth, userType) VALUES ('$name', '$uname', '$email', '$password', '$dob', '$userType')";

        $name     = $_POST['name'];
        $uname    = $_POST['userName'];
        $userType = $_POST['userType'];
        $email    = $_POST['email'];
        $password = $_POST['pass'];
        $dob      = $_POST['day']."/".$_POST['month']."/".$_POST['year'];

        if(empty($name) || empty($uname) || empty($userType) || empty($email) || empty($password) || empty($dob))
        {
            echo "please submit all information".'<a href="home.php"><u>Home</a>';
        }
        else
        {
            
            $result = mysqli_query($conn, $query);

            header('location: login.php');
        } 
    }
    else
    {
    	echo "sorry!!";
    }
?>