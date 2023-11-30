You can achieve automatic status updates for "Paid" or "Pending" based on the conditions you mentioned. Here's the code with the modifications:

```php
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
                    <h2 class="pageheader-title"><i class="fa fa-fw fa-file"></i> Document Request </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Document Request</li>
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
                    <h5 class="card-header">Request Information</h5>
                    <div class="card-body">
                        <div id="message"></div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th scope="col">Control No.</th>
                                        <th scope="col">Student ID</th>
                                        <th scope="col">Document Name</th>
                                        <th scope="col">No. of Copies</th>
                                        <th scope="col">Date Request</th>
                                        <th scope="col">Date Releasing</th>
                                        <th scope="col">Processing Officer</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $conn = new class_model();
                                    $docrequest = $conn->fetchAll_documentrequest();
                                    ?>
                                    <?php foreach ($docrequest as $row) {
                                        // Determine if the request is paid or pending based on conditions
                                        $status = 'Pending';
                                        if ($row['status'] === 'Received') {
                                            $status = 'Received';
                                        } elseif ($row['status'] === 'Paid' || ($row['status'] === 'Pending' && empty($row['date_releasing']))) {
                                            $status = 'Paid';
                                        }
                                    ?>
                                        <tr>
                                            <td><?= $row['control_no']; ?></td>
                                            <td><?= $row['studentID_no']; ?></td>
                                            <td><?= $row['document_name']; ?></td>
                                            <td><?= $row['no_ofcopies']; ?></td>
                                            <td><?= date("M d, Y", strtotime($row['date_request'])); ?></td>
                                            <td>
                                                <?php 
                                                if ($row['date_releasing'] === "") {
                                                    echo "";
                                                } elseif ($row['date_releasing'] === $row['date_releasing']) {
                                                    echo date("M d, Y", strtotime($row['date_releasing']));
                                                }
                                                ?>
                                            </td>
                                            <td><?= $row['processing_officer']; ?></td>
                                            <td>
                                                <?php
                                                // Display the determined status
                                                if ($status === "Pending") {
                                                    echo '<span class="badge bg-info text-white">Pending</span>';
                                                } else {
                                                    echo '<span class="badge bg-success text-white">Paid</span>';
                                                }
                                                ?>
                                            </td>
                                            <td class="align-right">
                                                <a href="edit-request.php?request=<?= $row['request_id']; ?>&student-number=<?php echo $row['studentID_no']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fa fa-edit"></i>
                                                </a> |
                                                <a href="javascript:;" data-id="<?= $row['request_id']; ?>" class="text-secondary font-weight-bold text-xs delete" data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fa fa-trash-alt"></i>
                                                </a>
                                            </td>
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
    $(document).ready(function () {
        var firstName = $('#firstName').text();
        var lastName = $('#lastName').text();
        var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
        var profileImage = $('#profileImage').text(intials);
    });
</script>
<script>
    $(document).ready(function () {
        load_data();

        var count = 1;

        function load_data() {
            $(document).on('click', '.delete', function () {
                var request_id = $(this).attr("data-id");
                if (confirm("Are you sure want to remove this data?")) {
                    $.ajax({
                        url: "../init/controllers/delete_request.php",
                        method: "POST",
                        data: {
                            request_id: request_id
                        },
                        success: function (response) {
                            $("#message").html(response);
                        },
                        error: function (response) {
                            console.log("Failed");
                        }
                    })
                }
            });
        }
    });
</script>
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"../init/controllers/fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
     $('.dropdown-menu_1').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();

 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification

('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>

<body style="background-color: lightblue;"> <!-- Light Blue Color -->

</body>
</html>