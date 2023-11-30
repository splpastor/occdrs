<?php
  require_once "../model/class_model.php";

	if(ISSET($_POST)){
		$conn = new class_model();

		$control_no = trim($_POST['control_no']);
		$total_amount = trim($_POST['total_amount']);
		$amount_paid = trim($_POST['amount_paid']);
		$date_ofpayment = trim($_POST['date_ofpayment']);
	    $proof_ofpayment = trim($_POST['proof_ofpayment']);;
		$status = trim($_POST['status']);
		$payment_id = trim($_POST['payment_id']);


		$payment = $conn->edit_payment($control_no, $total_amount, $amount_paid, $date_ofpayment, $proof_ofpayment, $status, $payment_id);
		if($payment == TRUE){
		    echo '<div class="alert alert-success">Edit Payment Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Edit Payment Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

