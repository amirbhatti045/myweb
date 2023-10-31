<?php
include("config.php");

 if(isset($_GET["deleteid"])){
    $id = $_GET['deleteid'];
    $qry = "DELETE FROM `admin_users` WHERE id='$id'";
    $result = mysqli_query($cn,$qry);
    if($result){
        header('Location:tables_data.php');
    }
 }
?>