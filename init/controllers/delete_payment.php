<?php
  require_once "../model/class_model.php";;
	if(ISSET($_POST)){
		$conn = new class_model();
		$payment_id = trim($_POST['payment_id']);
		$payment = $conn->delete_payment($payment_id);
		if($payment == TRUE){
		    echo '<div class="alert alert-success">Delete Payment Successfully!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Delete Payment Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

