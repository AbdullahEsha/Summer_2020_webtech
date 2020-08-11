
<?php

if(isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

        if(empty($_POST['userName']) || empty($_POST['pass'])){
            echo "Invalid";
        }
        else{
            $uname = $_POST['userName'];
            $password = $_POST['pass'];
            $query = "SELECT * FROM userinfo WHERE UserName = '$uname' AND Password = '$password'";
            $result = mysqli_query($conn, $query);
            //$i = 0;
            while( $row = mysqli_fetch_assoc($result) ){
                
                $Cemail    = $row['email'];
                $Cusername = $row['userName'];
                $Cpassword = $row['password'];
                $CuserType = $row['userType'];

                if(($uname == $Cusername) && ($password == $Cpassword)){
                    if($CuserType == 'Manager'){
                        $user = ['userName'=> $Cusername,'email'=> $Cemail,'pass'=> $password, 'userType'=>$CuserType];

            
                        $_SESSION['userName']   = $Cusername;
                        $_SESSION['email']      = $Cemail;
                        $_SESSION['pass']       = $password;
                        $_SESSION['userType']   = $CuserType;
                        $_SESSION['user']       = $user;

            
                    
                        setcookie('userName', $Cusername, time()+3600, '/');
                        setcookie('email', $Cemail, time()+3600, '/');
                        setcookie('pass', $Cpassword, time()+3600, '/');
                        setcookie('userType', $CuserType, time()+3600, '/');
            
                        echo "Cookie set.";
                        header('location: manager_page.php');
                    }
                    else if($CuserType == 'Staff'){
                        $user = ['userName'=> $Cusername,'email'=> $Cemail,'pass'=> $password, 'userType'=>$CuserType];

            
                        $_SESSION['userName']   = $Cusername;
                        $_SESSION['email']      = $Cemail;
                        $_SESSION['pass']       = $password;
                        $_SESSION['userType']   = $CuserType;
                        $_SESSION['user']       = $user;

            
                    
                        setcookie('userName', $Cusername, time()+3600, '/');
                        setcookie('email', $Cemail, time()+3600, '/');
                        setcookie('pass', $Cpassword, time()+3600, '/');
                        setcookie('userType', $CuserType, time()+3600, '/');
            
                        echo "Cookie set.";
                        header('location: staff_page.php');
                    }
                }
                //$i++;
            } 
        }
    }  
else
{
    echo "sorry!!";
}
?>