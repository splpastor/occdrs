<?php

 include '../model/config/connection2.php';


if(isset($_POST['view'])){

  if($_POST["view"] != ''){

      $stmt = $conn->prepare('UPDATE tbl_documentrequest SET `notif` = 1 WHERE `notif`= 0');
      $stmt->execute();
      $stmt->get_result();


  }

  $stmt = $conn->prepare('SELECT * FROM tbl_documentrequest ORDER BY request_id DESC LIMIT 5');
  $stmt->execute();
  $result = $stmt->get_result();
   $output = '';
   if($result->num_rows > 0){
   while ($row = $result->fetch_assoc()) {

     $output .= '


     <li style =" background-color:#23b294;width:100%">
       <a class="nav-item href="#" style="margin-left:10px;">
       <b><a href="request.php"><i class="fa fa-fw fa-file"></i>Document Name: '.$row["document_name"].'</b></a>
       <p style="margin-left:14px;font-size:11px"><i class="fa fa-calendar"></i> Date Releasing: <i>'.date("M d, Y",strtotime($row["date_releasing"])).'</i></p>
       <p style ="border-bottom:1px dotted green;width:100%;"></p>
       </a>
     </li>
     ';

   }
  }else{
       $output .= '
       <li><a href="#" class="text-bold text-italic">No Notif Found</a></li>';
  }

$stmt = $conn->prepare("SELECT * FROM tbl_documentrequest WHERE `notif`= 0");
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