<?php
session_start();
 include '../model/config/connection2.php';
 $student_id = $_SESSION['student_id'];


if(isset($_POST['view'])){

  if($_POST["view"] != ''){

      $stmt = $conn->prepare('SELECT * FROM tbl_documentrequest SET `notif` = 1 WHERE `notif`= 1');
     // $stmt->bind_param("i", $student_id);
      $stmt->execute();
      $stmt->get_result();


  }

  $stmt = $conn->prepare('SELECT * FROM tbl_documentrequest  WHERE student_id = ? AND `notif`= 1 ORDER BY request_id DESC LIMIT 5');
  $stmt->bind_param("i", $student_id);
  $stmt->execute();
  $result = $stmt->get_result();
   $output = '';
   if($result->num_rows > 0){
   while ($row = $result->fetch_assoc()) {

     $output .= '


     <li style =" background-color:#2e8b57;width:100%">
       <a class="nav-item href="#" style="margin-left:10px;">
       <b><a href="myrequest.php?student='.$student_id.'&document-name='.$row["document_name"].'&date-release='.$row["date_releasing"].'"><i class="fa fa-fw fa-file"></i>Document Name: '.$row["document_name"].'</b></a>
       <p style="margin-left:14px;font-size:11px;color:#d4cac9"><i class="fa fa-calendar"></i> Date Releasing: <i>'.date("M d, Y",strtotime($row["date_releasing"])).'</i></p>
       <p style ="border-bottom:1px dotted green;width:100%;"></p>
       </a>
     </li>
     ';

   }
  }else{
       $output .= '
       <li  style="color:red"><a href="#" class="text-bold text-italic"><p  style="margin-left:10px;color:red">No Notification Found</p></a></li>';
  }

$stmt = $conn->prepare("SELECT * FROM tbl_documentrequest WHERE student_id = ? AND `notif`= 1");
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();
    $count = $result->num_rows;
    $data = array(
        'notification' => $output,
        'unseen_notification'  => $count
    );

    echo json_encode($data);

  }

?>