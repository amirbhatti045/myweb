<?php
include("config.php");
    if(isset($_POST["update-student"])){
        $get_student_id =$_POST["edit_php"];
		$name =$_POST["student_name"];
		$father_name = $_POST["student_father_name"];
		$birth_date = $_POST["student_birth_date"];
	 	$gender = $_POST["student_gender"];
		$cnic_number =$_POST["student_cnic_number"];
		$mobile_number = $_POST["student_mobile_number"];
		$address = $_POST["student_address"];
		$course_name = $_POST["student_course_name"];
		$date_of_admission =$_POST["student_date_of_admission"];
		$remarks = $_POST["remarks"];
	
	 	    
		
		$qry = "UPDATE student SET student_name='$name',student_father_name='$father_name',student_birth_date='$birth_date',student_gender='$gender',student_cnic_number='$cnic_number',student_mobile_number='$mobile_number',student_address='$address',student_course_name='$course_name',student_date_of_admission='$date_of_admission',remarks='$remarks' WHERE student_id='$get_student_id'";
		mysqli_query($conn, $qry);
        
		if($qry){
		  header("Location:table.php");
		}
	}
?>