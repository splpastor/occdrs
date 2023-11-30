       <?php include('main_header/header.php');?>
       <style type="text/css">
         .form-control:focus, .form-control:active {
    background: transparent;
}
       </style>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
         <?php include('left_sidebar/sidebar.php');?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
               <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-file"></i> My Request </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Request</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
        <?php 
                    include '../init/model/config/connection2.php';

                    function generateRandomString($length = 10) {
                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $charactersLength = strlen($characters);
                        $randomString = '';
                        for ($i = 0; $i < $length; $i++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                        }
                        return $randomString;
                    }
                    $student = $_GET['student'];
                    $docname = $_GET['document-name'];
                    $date_releasing = $_GET['date-release'];
                    $sql = "SELECT * FROM `tbl_documentrequest` WHERE `student_id` = ? AND  `document_name`= ? AND date_releasing = ?";
                    $stmt = $conn->prepare($sql); 
                    $stmt->bind_param("iss",$student, $docname, $date_releasing);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                   ?>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card influencer-profile-data">
                                        <div class="card-body">
                                          <div class="" id="message"></div>
                                          <form method="POST">
                                         <div class="col-6 offset-3">
                                          <div class="form-box">
                                           <div class="form-text">
                                               Please claim your '<?= $row['document_name']; ?>' on date '<?= date("M d, Y",strtotime($row['date_releasing'])); ?>'
                                               <p id="control_no" hidden><?= $row['control_no']; ?></p>
                                               <p id="studentID_no" hidden><?= $row['studentID_no']; ?></p>
                                               <p id="document_name" hidden><?= $row['document_name']; ?></p>
                                               <p id="date_releasing" hidden><?= date("M d, Y",strtotime($row['date_releasing'])); ?></p>
                                            </div>
                                            <div class="form-text">
                                               <p>Reference Number:  <?= generateRandomString();?></p>
                                               <p id="ref_number" hidden><?= generateRandomString();?></p>
                                            </div>
                                             <div class="form-text">
                                                Show this Reference Number to Finance Office for your Payment Receipt Thank you!
                                            </div>
                                           <div class="form-text">
                                               &rarr; OR &larr;
                                            </div>
                                            <div class="form-text">
                                                You can pay via GCASH to this Number
                                            </div>
                                             <div class="form-text">
                                               09XXXXXXXXX / John Doe
                                            </div>
                                             <div class="form-text">
                                               Save your Receipt for verification
                                            </div>
                                            <p id="student_id" hidden><?= $row['student_id']; ?></p>
                                             <button type="button" class="btn btn-space btn-warning" id="my-request">Save</button>
                                               </form>
                                          </div>
                                        </div>
                                    </div>
                               <?php }?>
                            </div>
                        </div>
                    </div>
           
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/parsley/parsley.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
      <script>
          document.addEventListener('DOMContentLoaded', () => {
              let btn = document.querySelector('#my-request');
              btn.addEventListener('click', () => {


                  const control_no = document.getElementById('control_no').innerHTML;
                  //console.log(control_no);

                  const studentID_no = document.getElementById('studentID_no').innerHTML;
                  //console.log(studentID_no);

                  const document_name = document.getElementById('document_name').innerHTML;
                  //console.log(document_name);

                  const date_releasing = document.getElementById('date_releasing').innerHTML;
                  //console.log(date_releasing);

                  const ref_number = document.getElementById('ref_number').innerHTML;
                 // console.log(ref_number);

                  const proof_ofpayment = "GCASH";
                 // console.log(proof_ofpayment);

                  const student_id = document.getElementById('student_id').innerHTML;
                 // console.log(student_id);

                  var data = new FormData(this.form);

                  data.append('control_no', control_no);
                  data.append('studentID_no', studentID_no);
                  data.append('document_name', document_name);
                  data.append('date_releasing', date_releasing);
                  data.append('ref_number', ref_number);
                  data.append('proof_ofpayment', proof_ofpayment);
                  data.append('student_id', student_id);


                       $.ajax({
                        url: '../init/controllers/my_request.php',
                          type: "POST",
                          data: data,
                          processData: false,
                          contentType: false,
                          async: false,
                          cache: false,
                        success: function(response) {
                          $("#message").html(response);
                           window.scrollTo(0, 0);
                          },
                          error: function(response) {
                            console.log("Failed");
                          }
                      });
                  // }

              });
          });
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>


<!--     <script>
    $('#form').parsley();
    </script> -->
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
<body style="background-color: lightblue;"> <!-- Light Blue Color -->
</body>
 
</html>