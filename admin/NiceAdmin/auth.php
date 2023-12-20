<?php 
include("config.php");


if($_SESSION["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM admin_users WHERE username='$username' AND password ='$password'";
    $result = mysqli_query($cn, $qry);
    if(mysqli_num_rows($result) == 1){
        header("Location:index.php");
        exit();
    }else{
        header("Location:login.php?error=1");
        exit();
    }
}


?>