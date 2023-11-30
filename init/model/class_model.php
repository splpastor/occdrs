
<?php

	require 'config/connection.php';

	class class_model{

		public $host = db_host;
		public $user = db_user;
		public $pass = db_pass;
		public $dbname = db_name;
		public $conn;
		public $error;
 
		public function __construct(){
			$this->connect();
		}
 
		private function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}


    // Try

public function regist_process($IDNumber, $first_name, $middle_name, $last_name, $course, $year_level, $date_ofbirth, $gender, $complete_address, $email_address, $mobile_number, $username, $password, $status){
			$stmt = $this->conn->prepare("INSERT INTO `tbl_student` (`studentID_no`, `first_name`, `middle_name`, `last_name`, `course`, `year_level`, `date_ofbirth`, `gender`, `complete_address`, `email_address`, `mobile_number`, `username`, `password`, `account_status`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssssssssssss", $IDNumber, $first_name, $middle_name, $last_name, $course, $year_level, $date_ofbirth, $gender, $complete_address, $email_address, $mobile_number, $username, $password, $status);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}

    public function registerUser($username, $password, $email) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO tbl_student (username, password, email) VALUES ('$username', '$hashedPassword', '$email')";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Other methods for your application...




		public function login_student($username, $password, $status){
			$stmt = $this->conn->prepare("SELECT * FROM `tbl_student` WHERE `username` = ? AND `password` = ? AND `account_status` = ?") or die($this->conn->error);
			$stmt->bind_param("sss", $username, $password, $status);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				$fetch = $result->fetch_array();
				return array(
					'student_id'=> htmlentities($fetch['student_id']),
					'count'=>$valid
				);
			}
		}
 
		public function student_account($student_id){
			$stmt = $this->conn->prepare("SELECT * FROM `tbl_student` WHERE `student_id` = ?") or die($this->conn->error);
		    $stmt->bind_param("i", $student_id);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$fetch = $result->fetch_array();
				return array(
					'first_name'=> $fetch['first_name'],
					'last_name'=>$fetch['last_name']
				);
			}	
		}

		public function student_profile($student_id){
			$stmt = $this->conn->prepare("SELECT * FROM `tbl_student` WHERE `student_id` = ?") or die($this->conn->error);
		    $stmt->bind_param("i", $student_id);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$fetch = $result->fetch_array();
				return array(
					'student_id'=>$fetch['student_id'],
					'studentID_no'=>$fetch['studentID_no'],
					'first_name'=> $fetch['first_name'],
					'middle_name'=>$fetch['middle_name'],
					'last_name'=>$fetch['last_name'],
					'course'=>$fetch['course'],
					'gender'=>$fetch['gender'],
					'year_level'=>$fetch['year_level'],
					'email_address'=>$fetch['email_address'],
					'complete_address'=>$fetch['complete_address'],
					'mobile_number'=>$fetch['mobile_number'],
					'username'=>$fetch['username'],
					'password'=>$fetch['password'],
					'date_created'=>$fetch['date_created']
					
				);
			}	
		}


		public function add_document($document_name, $document_decription, $image_size, $student_id){
	       $stmt = $this->conn->prepare("INSERT INTO `tbl_document` (`document_name`, `document_decription`, `image_size`, `student_id`) VALUES(?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sssi", $document_name, $document_decription, $image_size, $student_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}

	    public function fetchAll_document($student_id){ 
            $sql = "SELECT * FROM  tbl_document WHERE `student_id` = ?";
				$stmt = $this->conn->prepare($sql);
			    $stmt->bind_param("i", $student_id); 
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

        public function edit_document($document_name, $document_decription, $image_size, $student_id, $document_id){

			$sql="SELECT document_name FROM tbl_document WHERE document_id = ?";
				$stmt2=$this->conn->prepare($sql);
				$stmt2->bind_param("i", $document_id);
				$stmt2->execute();
				$result2=$stmt2->get_result();
				$row=$result2->fetch_assoc();
				$imagepath='../../student/'.$row['document_name'];
				unlink($imagepath);

			$sql = "UPDATE `tbl_document` SET  `document_name` = ?, `document_decription` = ?, `image_size` = ?,  `student_id` = ? WHERE document_id = ?";
			 $stmt = $this->conn->prepare($sql);
			$stmt->bind_param("ssssi", $document_name, $document_decription, $image_size, $student_id, $document_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}

		public function delete_document($document_id){


			$sql="SELECT document_name FROM tbl_document WHERE document_id = ?";
				$stmt2=$this->conn->prepare($sql);
				$stmt2->bind_param("i", $document_id);
				$stmt2->execute();
				$result2=$stmt2->get_result();
				$row=$result2->fetch_assoc();
				$imagepath='../../student/'.$row['document_name'];
				unlink($imagepath);

				$sql = "DELETE FROM tbl_document WHERE document_id = ?";
				 $stmt = $this->conn->prepare($sql);
				$stmt->bind_param("i", $document_id);
				if($stmt->execute()){
					$stmt->close();
					$this->conn->close();
					return true;
				}
			}

		public function fetchAll_documentrequest($student_id){ 
            $sql = "SELECT * FROM  tbl_documentrequest WHERE `student_id` = ?";
				$stmt = $this->conn->prepare($sql);
			    $stmt->bind_param("i", $student_id); 
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

	    public function fetchAll_payment($student_id){ 
            $sql = "SELECT *,CONCAT(tbl_student.first_name, ', ' ,tbl_student.middle_name, ' ' ,tbl_student.last_name) as student_name FROM  tbl_payment INNER JOIN tbl_student ON tbl_student.student_id =  tbl_payment.student_id  WHERE tbl_payment.student_id = ?";
				$stmt = $this->conn->prepare($sql);
			    $stmt->bind_param("i", $student_id); 
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		public function edit_payment($document_controlno, $total_amount, $amount_paid, $date_ofpayment, $proof_ofpayment, $status, $payment_id){
			$sql = "UPDATE `tbl_payment` SET  `document_controlno` = ?, `total_amount` = ?, `amount_paid` = ?, `date_ofpayment` = ?, `proof_ofpayment` = ?, `status` = ?  WHERE payment_id = ?";
			 $stmt = $this->conn->prepare($sql);
			$stmt->bind_param("ssssssi", $document_controlno, $total_amount, $amount_paid, $date_ofpayment, $proof_ofpayment, $status, $payment_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}

		public function delete_payment($payment_id){
				$sql = "DELETE FROM tbl_payment WHERE payment_id = ?";
				 $stmt = $this->conn->prepare($sql);
				$stmt->bind_param("i", $document_id);
				if($stmt->execute()){
					$stmt->close();
					$this->conn->close();
					return true;
				}
			}


	    public function count_numberofstudents(){ 
            $sql = "SELECT COUNT(student_id) as count_students FROM tbl_student";
				$stmt = $this->conn->prepare($sql); 
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

	    public function count_numberoftotalrequest(){ 
            $sql = "SELECT COUNT(request_id) as count_request FROM tbl_documentrequest";
				$stmt = $this->conn->prepare($sql); 
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		 public function count_numberoftotalpending($student_id){ 
            $sql = "SELECT COUNT(request_id) as count_pending FROM tbl_documentrequest WHERE student_id = ? AND status = 'Pending'";
				$stmt = $this->conn->prepare($sql); 
				$stmt->bind_param("i", $student_id);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		 public function count_numberoftotalreceived($student_id){ 
            $sql = "SELECT COUNT(request_id) as count_received FROM tbl_documentrequest WHERE student_id = ? AND status = 'Received'";
				$stmt = $this->conn->prepare($sql); 
				$stmt->bind_param("i", $student_id);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		  public function count_numberoftotalpaid($student_id){ 
            $sql = "SELECT COUNT(request_id) as count_paid FROM tbl_documentrequest WHERE student_id = ? AND status = 'Paid'";
				$stmt = $this->conn->prepare($sql); 
				$stmt->bind_param("i", $student_id);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		  public function change_password($password, $student_id){
			$sql = "UPDATE `tbl_student` SET  `password` = ? WHERE student_id = ?";
			 $stmt = $this->conn->prepare($sql);
			$stmt->bind_param("si", $password, $student_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}


		public function add_request($control_no, $studentID_no, $document_name, $no_ofcopies, $date_request, $received,  $student_id){
	       $stmt = $this->conn->prepare("INSERT INTO `tbl_documentrequest` (`control_no`, `studentID_no`, `document_name`, `no_ofcopies`, `date_request`, `status`, `student_id`) VALUES(?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssssi", $control_no, $studentID_no, $document_name, $no_ofcopies, $date_request, $received, $student_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}




		public function add_myrequest($control_no, $studentID_no, $document_name, $date_releasing, $ref_number, $proof_ofpayment, $student_id, $Verified){
	       $stmt = $this->conn->prepare("INSERT INTO `tbl_payment` (`control_no`, `studentID_no`, `document_name`, `date_releasing`, `ref_number`, `proof_ofpayment`, `student_id`,`status`) VALUES(?, ?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssssis", $control_no, $studentID_no, $document_name, $date_releasing, $ref_number, $proof_ofpayment, $student_id, $Verified);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}




		public function edit_request($control_no, $studentID_no, $document_name, $no_ofcopies, $date_request, $request_id){
			$sql = "UPDATE `tbl_documentrequest` SET `control_no` = ?, `studentID_no` = ?, `document_name` = ?, `no_ofcopies` = ?, `date_request` = ? WHERE request_id = ?";
			 $stmt = $this->conn->prepare($sql);
			$stmt->bind_param("sssssi", $control_no, $studentID_no, $document_name, $no_ofcopies, $date_request, $request_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}

		public function delete_request($request_id){
				$sql = "DELETE FROM tbl_documentrequest WHERE request_id = ?";
				 $stmt = $this->conn->prepare($sql);
				$stmt->bind_param("i", $document_id);
				if($stmt->execute()){
					$stmt->close();
					$this->conn->close();
					return true;
				}
			}
	}	
?>