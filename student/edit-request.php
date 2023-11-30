       <?php include('main_header/header.php');?>
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
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-file"></i> Edit Request </h2>
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
                    $GET_reqid = intval($_GET['request']);
                    $student_number = $_GET['student-number'];
                    $sql = "SELECT * FROM `tbl_documentrequest` WHERE `request_id`= ? AND studentID_no = ?";
                    $stmt = $conn->prepare($sql); 
                    $stmt->bind_param("is", $GET_reqid, $student_number);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                   ?>
                         <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card influencer-profile-data">
                                        <div class="card-body">
                                             <div class="" id="message"></div>
                                            <form id="validationform" name="docu_forms" data-parsley-validate="" novalidate="" method="POST">
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right"><i class="fa fa-file"></i> Request Info</label>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Control No.</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" type="text" value="<?= $row['control_no']; ?>" name="control_no" required="" placeholder="" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Student ID</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  name="studentID_no" value="<?= $row['studentID_no']; ?>" type="text" required="" placeholder="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Document Name</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  type="text" value="<?= $row['document_name']; ?>"  name="document_name" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                 <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">No. of Copies</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  type="text"  value="<?= $row['no_ofcopies']; ?>" name="no_ofcopies" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>

                                                 <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Request</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  type="date" value="<?= strftime('%Y-%m-%d', strtotime($row['date_request'])); ?>" name="date_request" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>

<!--                                                  <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Releasing</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  type="date" name="date_releasing" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>
 -->
                                                </div>
                                                <div class="form-group row text-right">
                                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                        <input type="text" name="request_id" value="<?= $row['request_id']; ?>" class="form-control" hidden>
                                                        <button type="button" class="btn btn-space btn-primary" id="edit-request">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                     </div>
                                <?php } ?>
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
    <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>
     <script>
          document.addEventListener('DOMContentLoaded', () => {
              let btn = document.querySelector('#edit-request');
              btn.addEventListener('click', () => {

                  const control_no = document.querySelector('input[name=control_no]').value;
                  const studentID_no = document.querySelector('input[name=studentID_no]').value;
                  const document_name = document.querySelector('input[name=document_name]').value;
                  const no_ofcopies = document.querySelector('input[name=no_ofcopies]').value;
                  const date_request = document.querySelector('input[name=date_request]').value;
                  // const date_releasing = document.querySelector('input[name=date_releasing]').value;
                  const request_id = document.querySelector('input[name=request_id]').value;


                  var data = new FormData(this.form);

                  data.append('control_no', control_no);
                  data.append('studentID_no', studentID_no);
                  data.append('document_name', document_name);
                  data.append('no_ofcopies', no_ofcopies);
                  data.append('date_request', date_request);
                  // data.append('date_releasing', date_releasing);
                  data.append('request_id', request_id);


              if (control_no === '' &&  studentID_no ==='' &&  document_name ==='' &&  no_ofcopies ==='' &&  date_request ===''){
                      $('#message').html('<div class="alert alert-danger"> Required All Fields!</div>');
                    }else{
                       $.ajax({
                        url: '../init/controllers/edit_request.php',
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
                   }

              });
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