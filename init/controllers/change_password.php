<?php
  require_once "../model/class_model.php";;
	if(ISSET($_POST)){
		$conn = new class_model();

		$password = trim($_POST['password']);
		$student_id = trim($_POST['student_id']);

		$pass = $conn->change_password($password, $student_id);
		if($pass == TRUE){
		    echo '<div class="alert alert-success">Change Password Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Change Password  Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

