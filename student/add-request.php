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
                    <h2 class="pageheader-title"><i class="fa fa-fw fa-file"></i> Add Request </h2>
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

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card influencer-profile-data">
                    <div class="card-body">
                         <div class="" id="message"></div>
                        <form id="validationform" name="docu_forms" data-parsley-validate="" novalidate="" method="POST">
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right"><i class="fa fa-file"></i> Request Info</label>
                            </div>
                            <?php 

                              function createRandomcnumber() {
                                  $chars = "003232303232023232023456789";
                                  srand((double)microtime()*1000000);
                                  $i = 0;
                                  $control = '' ;
                                  while ($i <= 3) {

                                    $num = rand() % 33;

                                    $tmp = substr($chars, $num, 1);

                                    $control = $control . $tmp;

                                    $i++;

                                  }
                                  return $control;
                                 }
                                 $cNumber ='CTRL-'.createRandomcnumber();


                            ?>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Control No.</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input data-parsley-type="alphanum" type="text" value="<?= $cNumber.''.$_SESSION['student_id']; ?>" name="control_no" required="" placeholder="" class="form-control" readonly>
                                </div>
                            </div>
                             <?php
                                  $conn = new class_model();
                                  $getstudno = $conn->student_profile($student_id);
                               ?>


                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Student ID</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input data-parsley-type="alphanum"  name="studentID_no" value="<?= $getstudno['studentID_no']; ?>" type="text" required="" placeholder="" class="form-control" readonly>
                                </div>
                            </div>


                            <!-- Dropdown for Doc Types -->
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Document Name</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select class="form-control" name="document_name" required>
                                        <option value="">Select Document Type</option>
                                        <option value="Transcript of Record">Transcript of Record</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Course Description">Course Description</option>
                                        <option value="Honorable Dismissal">Honorable Dismissal</option>
                                        <option value="Certificate of Graduation">Certificate of Graduation</option>
                                        <option value="Certificate of Grades">Certificate of Grades</option>
                                        <option value="Certificate of Enrollment">Certificate of Enrollment</option>
                                        <option value="Certificate of Good Moral Character">Certificate of Good Moral Character</option>
                                        <option value="Temporary I.D.">Temporary I.D.</option>
                                        <option value="Certified True Copy of Document">Certified True Copy of Document</option>
                                    </select>
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">No. of Copies</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number" name="no_ofcopies" required placeholder="No. of Copies" class="form-control">
                                </div>
                            </div>

                              <!-- ... (Try Dropdown) ... -->



                                <!-- ... (dropdown) ... -->

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Purpose</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select class="form-control" name="purpose" required>
                                        <option value="">Select Purpose</option>
                                        <option value="Purpose 1">Purpose 1</option>
                                        <option value="Purpose 2">Purpose 2</option>
                                        <option value="Purpose 3">Purpose 3</option>
                                        <!-- Add more purpose options here -->
                                    </select>
                                </div>
                            </div>

                           
                            <!-- (End of Purpose form) -->


                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Request</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input data-parsley-type="alphanum"  type="date" name="date_request" required="" placeholder="" class="form-control">
                                </div>
                            </div>

                             <!-- submit button -->
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <input type="text" name="student_id" value="<?= $_SESSION['student_id'];?>" class="form-control" hidden>
                                    <button type="button" class="btn btn-space btn-primary" id="add-request">Submit</button>
                                </div>
                            </div>


                            <!-- Announcement Text -->
                            <div class="announcement-text">
                                <!-- Add your announcement text here -->
                                <p>NOTE: Kindly check the information before clicking the submit button.</p>
                            </div> 
                            <style>
                             .announcement-text {
                                text-align: center; /* Center align the text horizontally */
                                margin-top: 20px; /* Adjust the margin as needed for vertical centering */
                             }
                            </style>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end main wrapper -->

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
        let btn = document.querySelector('#add-request');
        btn.addEventListener('click', () => {

            const control_no = document.querySelector('input[name=control_no]').value;
            const studentID_no = document.querySelector('input[name=studentID_no]').value;
            
            const no_ofcopies = document.querySelector('input[name=no_ofcopies]').value;
            const date_request = document.querySelector('input[name=date_request]').value;
            // const date_releasing = document.querySelector('input[name=date_releasing]').value;
            const student_id = document.querySelector('input[name=student_id]').value;

            var data = new FormData(this.form);

            data.append('control_no', control_no);
            data.append('studentID_no', studentID_no);
            data.append('document_name', document_name);
            data.append('no_ofcopies', no_ofcopies);
            data.append('date_request', date_request);
            // data.append('date_releasing', date_releasing);
            data.append('student_id', student_id);

            if (control_no === '' || studentID_no === '' || document_name === '' || no_ofcopies === '' || date_request === ''){
                $('#message').html('<div class="alert alert-danger"> Required All Fields!</div>');
            } else {
                $.ajax({
                    url: '../init/controllers/add_request.php',
                    type: 'POST',
                    data: data,
                    processData: false,
                    contentType: false,
                    async: false,
                    cache: false,
                    success: function(response) {
                        $('#message').html(response);
                        window.scrollTo(0, 0);
                    },
                    error: function(response) {
                        console.log('Failed');
                    }
                });
            }
        });
    });
</script>
<!-- Example starter JavaScript for disabling form submissions if there are invalid fields -->
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
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
