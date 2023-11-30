<?php
	require_once "model/class_model.php";
	$conn = new class_model();
	if(ISSET($_POST['signup'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$conn->save($username, $password, $firstname, $lastname);
		echo '<script>alert("Successfully saved!")</script>';
		echo '<script>window.location= "index.php"</script>';
	}	
?>