<?php
  require_once "../model/class_model.php";
	if(ISSET($_POST)){
		$conn = new class_model();
		$course_name = trim($_POST['course_name']);
		$course_decription = trim($_POST['course_decription']);
		$course = $conn->add_course($course_name, $course_decription);
		if($course == TRUE){
		    echo '<div class="alert alert-success">Add Course Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Add Course Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

