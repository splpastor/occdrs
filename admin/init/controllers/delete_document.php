<?php
  require_once "../model/class_model.php";;
	if(ISSET($_POST)){
		$conn = new class_model();
		$document_id = trim($_POST['document_id']);
		$docu = $conn->delete_document($document_id);
		if($docu == TRUE){
		    echo '<div class="alert alert-success">Delete Document Successfully!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Delete Document Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

