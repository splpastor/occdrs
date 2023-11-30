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
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-money-bill-wave"></i> Payment </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Payment</li>
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
                                <h5 class="card-header">Payment Information</h5>
                                <div class="card-body">
                                    <div id="message"></div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Student Name.</th>
                                                    <th scope="col">Control No.</th>
                                                    <th scope="col">Document Name</th>
                                                    <th scope="col">Date Release</th>
                                                    <th scope="col">Reference No.</th>
                                                     <th scope="col">Date of Payment</th>
                                                    <th scope="col">Total Amount</th>
                                                    <th scope="col">Amount Paid</th>
                                                    <th scope="col">Proof of Payment</th>
                                                    <th scope="col">Status</th>
                                               <!--      <th scope="col">Action</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                                function formatMoney($number, $fractional=false) {
                                                if ($fractional) {
                                                        $number = sprintf('%.2f', $number);
                                                    }
                                                    while (true) {
                                                        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
                                                        if ($replaced != $number) {
                                                            $number = $replaced;
                                                        } else {
                                                            break;
                                                        }
                                                    }
                                                    return $number;
                                                } 
                                                $student_id = $_SESSION['student_id'];
                                                $conn = new class_model();
                                                $payment = $conn->fetchAll_payment($student_id);
                                               ?>
                                               <?php foreach ($payment as $row) { ?>
                                                <tr>
                                                   <td><?= ucwords($row['student_name']); ?></td>
                                                    <td><?= $row['control_no']; ?></td>
                                             
                                                    <td><?= $row['document_name']; ?></td>
                                                    <td><?= $row['date_releasing']; ?></td>
                                                    <td><?= $row['ref_number']; ?></td>
                                                    <td>    
                                                      <?php 
                                                     if($row['date_ofpayment'] === ""){
                                                           echo "";
                                                         }else if($row['date_ofpayment'] === $row['date_ofpayment']){
                                                           echo date("M d, Y",strtotime($row['date_ofpayment']));
                                                         }
                                                     ?>
                                                    </td>
                                                    <td><?php $tamount = $row['total_amount']; echo 'Php'.' '.formatMoney($tamount, true); ?></td>
                                                    <td><?php $apaid = $row['amount_paid']; echo 'Php'.' '.formatMoney($apaid, true); ?></td>

                                                    <td><?= $row['proof_ofpayment']; ?></td>
                                                    <td>
                                                  
                                                    <?php 
                                                       if($row['status'] ==="Verified"){
                                                           echo '<span class="badge bg-warning text-white">Verified</span>';
                                                         }else if($row['status'] ==="Paid"){
                                                           echo '<span class="badge bg-success text-white">Paid</span>';
                                                        } else if($row['status'] ==="Rejected"){
                                                           echo '<span class="badge bg-danger text-white">Rejected</span>';
                                                        }
                                                     ?> </td>
                                                    
             <!--                                        <td class="align-right">
                                                        <a href="edit-payment.php?payment=<?= $row['payment_id']; ?>&document-controlnumber=<?php echo $row['document_controlno']; ?>"  class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                          <i class="fa fa-edit"></i>
                                                        </a> |
                                                        <a href="javascript:;" data-id="<?= $row['payment_id']; ?>"  class="text-secondary font-weight-bold text-xs delete" data-toggle="tooltip" data-original-title="Edit user">
                                                          <i class="fa fa-trash-alt"></i>
                                                        </a>
                                                      </td> -->
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
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
     <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>
    <script>
    $(document).ready(function() {

        load_data();

        var count = 1;

        function load_data() {
            $(document).on('click', '.delete', function() {

                var payment_id = $(this).attr("data-id");
                // console.log("================get course_id================");
                // console.log(course_id);
                if (confirm("Are you sure want to remove this data?")) {
                    $.ajax({
                        url: "../init/controllers/delete_payment.php",
                        method: "POST",
                        data: {
                            payment_id: payment_id
                        },
                      success: function(response) {

                          $("#message").html(response);
                          },
                          error: function(response) {
                            console.log("Failed");
                          }
                    })
                }
            });
        }

    });
</script>
<body style="background-color: lightblue;"> <!-- Light Blue Color -->
</body>
 
</html>