<?php
include("config.php");
    if(isset($_POST["update"])){
         $get_student_id =$_POST["id_php"];
		$name =$_POST["username"];
		$email = $_POST["email"];
		$mobile = $_POST["mobile"];
	 	$address = $_POST["address"];
		$usertype =$_POST["usertype"];
		
	
	 	    
		
		$qry = "UPDATE admin_users SET username='$name',email='$email',mobile='$mobile',address='$address',usertype='$usertype' WHERE id='$get_student_id'";
		mysqli_query($cn, $qry);
        
		if($qry){
		  header("Location:tables_data.php");
		}
	}
?>