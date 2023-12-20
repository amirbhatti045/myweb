<?php
include("config.php");
    if(isset($_POST["admin_profile"])){
        $get_student_id =$_POST["admin_profile"];
		$username =$_POST["username"];
		$email = $_POST["email"];
		$mobile = $_POST["mobile"];
	 	$address = $_POST["address"];
		$usertype =$_POST["usertype"];
		
	
		$qry = "UPDATE admin_users SET username='$username',email='$email',mobile='$mobile',address='$address',usertype='$usertype' WHERE id='$get_student_id'";
		mysqli_query($conn, $qry);
        
		if($qry){
		  header("Location:profile.php");
		}
	}
?>