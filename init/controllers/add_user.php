<?php
  require_once "../model/class_model.php";
	if(ISSET($_POST)){
		$conn = new class_model();

		$complete_name = trim($_POST['complete_name']);
		$desgination = trim($_POST['desgination']);
		$email_address = trim($_POST['email_address']);
		$phone_number = trim($_POST['phone_number']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$status = "Active";

		$user = $conn->add_user($complete_name, $desgination, $email_address, $phone_number, $username, $password, $status);
		if($user == TRUE){
		    echo '<div class="alert alert-success">Add User Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Add User Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

