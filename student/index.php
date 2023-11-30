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
                <!-- pagehader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard </h2><div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->

                
                <div class="row">
                    <!-- metric -->
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                               <?php 
                                    $student_id = $_SESSION['student_id'];
                                    $conn = new class_model();
                                    $cstudent = $conn->count_numberoftotalpending($student_id);
                               ?>
                               <?php foreach ($cstudent as $row): ?>
                                <div class="d-inline-block">
                                    <h5 class="text-muted">Pending</h5>
                                    <h2 class="mb-0"><?= $row['count_pending']; ?></h2>
                                </div>
                                <div class="float-right icon-circle-medium  icon-box-lg  bg-success-light mt-1">
                                    <i class="fa fa-eye fa-fw fa-sm text-info"></i>
                                </div>
                                 <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <!-- /. metric -->
                    <!-- metric -->
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                              <?php 
                                    $student_id = $_SESSION['student_id'];
                                    $conn = new class_model();
                                    $cstudent = $conn->count_numberoftotalpaid($student_id);
                               ?>
                               <?php foreach ($cstudent as $row): ?>
                                <div class="d-inline-block">
                                    <h5 class="text-muted">Paid</h5>
                                    <h2 class="mb-0"><?= $row['count_paid']; ?></h2>
                                </div>
                                <div class="float-right icon-circle-medium  icon-box-lg  bg-success-light mt-1">
                                    <i class="fa fa-money-bill-wave fa-fw fa-sm text-info"></i>
                                </div>
                                 <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <!-- /. metric -->
                 <!-- metric -->
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 offset-md-3">
                        <div class="card">
                            <div class="card-body">
                              <?php 
                                    $student_id = $_SESSION['student_id'];
                                    $conn = new class_model();
                                    $cstudent = $conn->count_numberoftotalreceived($student_id);
                               ?>
                               <?php foreach ($cstudent as $row): ?>
                                <div class="d-inline-block">
                                    <h5 class="text-muted">Received</h5>
                                    <h2 class="mb-0"><?= $row['count_received']; ?></h2>
                                </div>
                                <div class="float-right icon-circle-medium  icon-box-lg  bg-success-light mt-1">
                                   <i class="fa fa-check fa-fw fa-sm text-info"></i>
                                </div>
                                 <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <!-- /. metric -->

        </div>

    

 <!-- Announcement Section -->
<div class="container">
    <!-- Add the announcement image here -->
    <img src="../assets/images/scholasticdocs.png" alt="Announcement Image" class="img-fluid" style="width: 700px; height: auto; margin-left: 90px;">
</div>


        <br>
        
       <!-- Announcement Section -->
<div class="container text-center"> 
        <!-- Add the announcement image here -->
        <img src="../assets/images/docfees.png" alt="Announcement Image" class="img-fluid" style="width: 500px; height: auto; margin-left: -90px;">
    </div>
</div>


 <!-- Announcement Text -->
<div class="announcement-text text-center"> <!-- Center align the text -->
    <!-- Add your announcement text here -->
    <h3>For more inquiries or assistance, please feel free to contact our support team.</h3>
    <p>Contact no.: 0931 919 1778<br>Email: occregistrar2000@gmail.com <br> FB Page: https://www.facebook.com/OCCregistrar2000</p>
</div>

<br>



        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstrap bundle js-->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- chartjs js-->
    <script src="../assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="../assets/vendor/charts/charts-bundle/chartjs.js"></script>
   
    <!-- main js-->
    <script src="../assets/libs/js/main-js.js"></script>
     <!-- dashboard sales js-->
    <script src="../assets/libs/js/dashboard-sales.js"></script>
     <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>
   <body style="background-color: lightblue;"> <!-- Light Blue Color -->

</body>
 
</html>