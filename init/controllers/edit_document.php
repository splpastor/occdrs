<?php
  require_once "../model/class_model.php";
	if(ISSET($_POST)){
		$conn = new class_model();

		  $files = addslashes(file_get_contents($_FILES['document_name']['tmp_name']));
		  $document_name ="student_uploads/". addslashes($_FILES['document_name']['name']);
		 // $document_name = unlink('../../student/'.$documentname);
		 // $document_name = '../../student/'. $old;
		  $image_size =  $_FILES['document_name']['size'];
		  move_uploaded_file($_FILES["document_name"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/Online-School-Documents-Processing/student/student_uploads/" .   addslashes($_FILES["document_name"]["name"]));

		  $document_decription = trim($_POST['document_decription']);
		  $student_id = trim($_POST['student_id']);
		  $document_id = trim($_POST['document_id']);
	



		$doc = $conn->edit_document($document_name, $document_decription, $image_size, $student_id, $document_id);
		if($doc == TRUE){
		   echo '<div class="alert alert-success">Edit Document Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Edit Document Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>


