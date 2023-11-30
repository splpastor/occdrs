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
                                <h5 class="card-header">Request Status Reports</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                           <div class="card">
                                              <div class="card-body">
                                                 <div class="chart-title">
                                                    <h4>Request Status</h4>
                                                 </div>
                                                 <table class="table table-bordered mytable">
                                                     <thead>
                                                         <tr>
                                                            <th>Course</th>
                                                            <th>Number of Request</th>
                                                         </tr>
                                                     </thead>
                                                    <tbody>
                                                        <tr>
                                                           <td>Bachelor in Elementary Education</td>
                                                           <td>19</td>
                                                        </tr>
                                                        <tr>
                                                           <td>Bachelor in Secondary Education - Major in English</td>
                                                           <td>20</td>
                                                        </tr>
                                                        <tr>
                                                           <td>Bachelor in Secondary Education - Major in Mathematics</td>
                                                           <td>60</td>
                                                        </tr>
                                                        <tr>
                                                           <td>Bachelor in Secondary Education - Major in Science</td>
                                                           <td>20</td>
                                                        </tr>
                                                        <tr>
                                                           <td>Bachelor in Technical - Vocational Teacher Education - Major in Automotive Technology</td>
                                                           <td>60</td>
                                                        </tr>
                                                        <tr>
                                                           <td>Bachelor in Technical - Vocational Teacher Education - Major in Food and Service Management</td>
                                                           <td>35</td>
                                                        </tr>
                                                        <tr>
                                                           <td>Bachelor in Technical - Vocational Teacher Education - Major in Welding and Fabrication Technology</td>
                                                           <td>96</td>
                                                        </tr>
                                                        <tr>
                                                           <td>Bachelor in Technical - Vocational Teacher Education -Major in Electrical Technology</td>
                                                           <td>84</td>
                                                        </tr>
                                                        <tr>
                                                           <td>Bachelor of Science in Office Administration</td>
                                                           <td>20</td>
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
                                                    <h4>Number of Request</h4><br>
                                                 </div>
                                                 <div id="piechart" style="width: 500px; height: 500px;"></div>
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
    <script type="text/javascript" src="../assets/js/loader.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>
   <script type="text/javascript">
      google.charts.load('current', { 'packages': ['corechart'] });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

         var data = google.visualization.arrayToDataTable([
            ['Course', 'Request'],
            ['BEEd', 19],
            ['BSEd - Major in English', 20],
            ['BSEd- Major in Mathematics', 60],
            ['BSEd - Major in Science', 20],
            ['BTVED - Major in Automotive Technology', 60],
            ['BTVED - Major in Food and Service Management', 35],
            ['BTVED - Major in Welding and Fabrication Technology', 96],
            ['BTVTEd -Major in Electrical Technology', 84],
            ['BSOA', 20],
         ]);

         var options = {
            title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart'));

         chart.draw(data, options);
      }
   </script>


<body style="background-color: lightblue;"> <!-- Light Blue Color -->

</body>
 
</html>