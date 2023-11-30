<?php
  
  include '../model/config/connection2.php';

	if(ISSET($_REQUEST['docname'])){
		$exp=explode("/", $_REQUEST['docname']);
		$docname=$exp[1];
		
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=".basename($docname));
		header("Content-Type: application/octet-stream;");
		header("Content-Transfer-Encoding: binary");
		readfile("student_uploads/".$docname);
	}
?>