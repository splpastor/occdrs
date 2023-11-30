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
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-chart-bar"></i> Reports </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Reports</li>
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
                            <div class="card">
                                <h5 class="card-header">Users Information</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                           <div class="card">
                                              <div class="card-body">
                                                 <div class="chart-title">
                                                    <h4>Monthly Income Report </h4>
                                                 </div>
                                                 <table class="table table-bordered mytable">
                                                    <tbody>
                                                       <tr>
                                                          <td>January</td>
                                                          <td>15000</td>
                                                       </tr>
                                                       <tr>
                                                          <td>February</td>
                                                          <td>23000</td>
                                                       </tr>
                                                       <tr>
                                                          <td>March</td>
                                                          <td>5500</td>
                                                       </tr>
                                                       <tr>
                                                          <td>April</td>
                                                          <td>17000</td>
                                                       </tr>
                                                       <tr>
                                                          <td>May</td>
                                                          <td>25000</td>
                                                       </tr>
                                                       <tr>
                                                          <td>June</td>
                                                          <td>30000</td>
                                                       </tr>
                                                       <tr>
                                                          <td>July</td>
                                                          <td>2000</td>
                                                       </tr>
                                                       <tr>
                                                          <td>August</td>
                                                          <td>15000</td>
                                                       </tr>
                                                       <tr>
                                                          <td>September</td>
                                                          <td>22000</td>
                                                       </tr>
                                                       <tr>
                                                          <td>October</td>
                                                          <td>34000</td>
                                                       </tr>
                                                       <tr>
                                                          <td>November</td>
                                                          <td>35000</td>
                                                       </tr>
                                                       <tr>
                                                          <td>December</td>
                                                          <td>55000</td>
                                                       </tr>
                                                    </tbody>
                                                 </table>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                                           <div class="card">
                                              <div class="card-body">
                                                 <div class="chart-title">
                                                    <h4>Graphical Representaion Monthly Income Report</h4><br>
                                                 </div>
                                                 <canvas id="bargraph"></canvas>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end responsive table -->
                        <!-- ============================================================== -->
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
    <script src="../assets/vendor/custom-js/jquery.multi-select.html"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="../assets/js/chart.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>
    <script>
       document.addEventListener("DOMContentLoaded", function () {
          // Bar Chart
          var barChartData = {
             labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "Novermber", "December"],
             datasets: [{
                label: 'Income',
                backgroundColor: 'rgb(79,129,189)',
                borderColor: 'rgba(0, 158, 251, 1)',
                borderWidth: 1,
                data: [15000, 2300, 5500, 17000, 25000, 30000, 2000, 15000, 22000, 34000, 35000, 55000]
             }]
          };
 
          var ctx = document.getElementById('bargraph').getContext('2d');
          window.myBar = new Chart(ctx, {
             type: 'bar',
             data: barChartData,
             options: {
                responsive: true,
                legend: {
                   display: false,
                }
             }
          });
 
       });
    </script>

<body style="background-color: lightblue;"> <!-- Light Blue Color -->
    
</body>
 
</html>