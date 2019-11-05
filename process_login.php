<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once ('backend/config.php');

$uname = $_POST['username'];
$upass = $_POST['password'];

if ($uname != "" && $password != ""){
    $query = "select * from usuario where username='". $uname."' and senha='".$password."'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $count = mysqli_num_rows($result);


    if ($count == 1){

        //echo "Login Credentials verified";
        echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

            $_SESSION['uname'] = $uname;
            header('Location: painel.php');
        
        }else{
        echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
        //echo "Invalid Login Credentials";
            header('Location: index.php');
        }
}else {
    echo "No OK";
}
