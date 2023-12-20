<?php
include("includes/config.php");
if(isset($_POST["register"])){
    $username=$_POST["username"];    
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql= "INSERT INTO register (username , email , password) 
           VALUES ('$username','$email','$password')";
    $result=mysqli_query($cn,$sql);
    if($result){
        header("Location:register.php");
    }
}
?>