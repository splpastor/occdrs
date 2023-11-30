<?php
	session_start();
	session_destroy();
	session_unset($_SESSION['student_id']);
	header('location:../../index.php');
?>