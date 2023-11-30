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
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-user"></i> Profiles </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Profiles</li>
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
                        $student_id = $_SESSION['student_id'];
                        $conn = new class_model();
                        $user = $conn->student_profile($student_id);
                    ?>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card influencer-profile-data">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                                    <div class="text-center">
                                                        <div id="profileImage_2"></div>
                                                     <!--    <img src="../assets/images/256-128.webp" alt="User Avatar" class="rounded-circle user-avatar-xxl"> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                                                        <div class="user-avatar-info">
                                                            <div class="m-b-20">
                                                                <div class="user-avatar-name">
                                                                    <h2 class="mb-1"><span id="firstName"><?= ucfirst($user['first_name']).' </span>'.ucfirst($user['middle_name']).'<span id="lastName"> '.ucfirst($user['last_name']); ?></span></h2>
                                                                </div><br>
                                                            </div>
                                                            <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
                                                            <div class="user-avatar-address">
                                                                <p class="border-bottom pb-3">
                                                                    <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i><?= ucfirst($user['complete_address']); ?></span>
                                                                    <span class="mb-2 ml-xl-4 d-xl-inline-block d-block">Joined date: <?= date("M d, Y",strtotime($user['date_created'])); ?> </span>
                                                                    <span class=" mb-2 d-xl-inline-block d-block ml-xl-4"><?= ucfirst($user['gender']); ?> 
                                                                            </span>
                                                                  <!--   <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">29 Year Old </span> -->
                                                                </p>
                                                                <p class="border-bottom pb-3">
                                                                    <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-certificate mr-2 text-primary "></i><?= ucfirst($user['course']); ?></span>
                                                                    <span class="mb-2 ml-xl-4 d-xl-inline-block d-block"><?= ucfirst($user['year_level']); ?> </span>
                                                                </p>
                                                                <div class="mt-3">
                                                                    <a href="#" class="badge badge-light mr-1"><i class="fa fa-fw fa-envelope"></i> <?= ucfirst($user['email_address']); ?></a> <a href="#" class="badge badge-light mr-1"><i class="fa fa-fw fa-phone"></i> <?= ucfirst($user['mobile_number']); ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top user-social-box">
                                                <form id="validationform" data-parsley-validate="" novalidate="" method="POST">
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-3 col-form-label text-sm-right"><i class="fa fa-user"></i> Account Info</label>
                                                    </div>
                                                    <div class="" id="message"></div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Username</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input data-parsley-type="alphanum" type="text" name="username" value="<?= $user['username']; ?>" required="" placeholder="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Password</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input data-parsley-type="alphanum" type="password" name="password" value="<?= $user['password']; ?>" required="" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row text-right">
                                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                              <input name="student_id" value="<?= $user['student_id']; ?>" class="form-control" hidden>
                                                            <button type="button" class="btn btn-space btn-primary" id="btn-change">Save Changes</button>
                                                            <button class="btn btn-space btn-secondary">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
    $('#form').parsley();
    </script>
       <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage_2 = $('#profileImage_2').text(intials);
        });
    </script>
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
          <script>
          document.addEventListener('DOMContentLoaded', () => {
              let btn = document.querySelector('#btn-change');
              btn.addEventListener('click', () => {

    
                  const password = document.querySelector('input[name=password]').value;
                  console.log(password);
                  const student_id = document.querySelector('input[name=student_id]').value;
                   console.log(student_id);

                  var data = new FormData(this.form);
                  data.append('password', password);
                  data.append('student_id', student_id);


              if (password === ''){
                      $('#message').html('<div class="alert alert-danger"> Required All Fields!</div>');
                    }else{
                       $.ajax({
                        url: '../init/controllers/change_password.php',
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

      <body style="background-color: lightblue;"> <!-- Light Blue Color -->
</body>
 
</html>