<?php
		require_once "../model/class_model.php";;
	if(ISSET($_POST)){
		$conn = new class_model();
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$status = "Active";
	//	$role = "Administrator";
		
		$get_student = $conn->login_student($username, $password, $status);
		if($get_student['count'] > 0){
			session_start();
			$_SESSION['student_id'] = $get_student['student_id'];

			echo 1;
		}else{
			echo 0;
		}
	}
?>

