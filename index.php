<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

<!-- Add these lines to your existing head section -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>
        /* Existing styles... */

        /* Style for the "About Us" section */
        .about-us {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .about-us h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .about-us p {
            font-size: 16px;
        }
    </style>
</head>




    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .button {
      background-color: #0197f6; /* Vivid Cerulean */
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }

    .button1 {
      background-color: white; 
      color: black; 
      border: 2px solid #d6a92b;
    }

    .button1:hover {
      background-color: #d6a92b;
      color: white;

    </style>

    
   
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->

    <!-- CAROUSEL -->
    <!--
<body>
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        Carousel items with adjusted image size 
        <div class="carousel-item active">
            <img src="assets/images/OCCcmp.png" class="d-block w-100 smaller-image" alt="Image 1">
            <div class="carousel-caption">
                <h3>Image 1</h3>
                <p>Image 1 description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/campus.png" class="d-block w-100 smaller-image" alt="Image 2">
            <div class="carousel-caption">
                <h3>Image 2</h3>
                <p>Image 2 description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/Dxdays.png" class="d-block w-100 smaller-image" alt="Image 3">
            <div class="carousel-caption">
                <h3>Image 3</h3>
                <p>Image 3 description</p>
            </div>
        </div>
    </div>
</div>


<style>
    /* Add this style for existing CSS */
    .smaller-image {
        max-height: 100px; /* Adjust the maximum height as needed */
        width: auto;
        margin: auto;
    }
</style>
-->



    <!-- Title block -->
    <div class="title-block">
        <img src="assets/images/OCC.jpg" alt="Logo" class="logo-image">
        <h1>OCC Document Request System</h1>
    </div>


    <style>
    /* Styles for the title block */
    .title-block {
        background-color: white; /* Background color for the title block */
        color: white; /* Text color for the title block */
        padding: 10px;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%; /* Make the title block span the full width */
        display: flex;
        align-items: center; /* Vertically center content */
    }

    .title-block h1 {
        font-size: 20px;
        margin: 0;
        margin-left: 10px; /* Add some space between the image and text */
    }

    /* Style for the logo image */
    .logo-image {
        height: 30px; /* Adjust the height as needed */
    }

    /* Other existing styles... */
</style>




  <!-- Background for login page -->
   
    <style>
        body {
            /* Set the background image URL and other background properties */
            background-image: url('assets/images/campus.png');
            background-size: cover; /* Adjust this as needed */
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>


  <!-- Start -->
    

    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="index.html"><img class="logo-img" src="assets/images/OCC.jpg" alt="logo" height="200px"></a></div>
            <div class="card-body">
                <form method="post" name="login_sform">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" alt="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" alt="password" placeholder="Password"  autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="remember" onclick="myFunction()"><span class="custom-control-label">Show Password</span>
                        </label>
                    </div>
                   <div class="form-group">
                    <button class="btn btn-lg btn-block button1" style="background-color:lightblue; value="Sign in" id="btn-student" name="btn-student">Sign in</button>
                    </div>

                    

                     <div class="form-group" id="alert-msg">
                </form>
            </div>
        </div>
    </div>
    
    
  <!-- Register -->
         <p>Don't have an account? <a href="regist.php">Create an account</a></p>

     

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
   <script type="text/javascript">
      document.oncontextmenu = document.body.oncontextmenu = function() {return false;}//disable right click
    </script> 

     <script type="text/javascript">
            jQuery(function(){
                $('form[name="login_sform"]').on('submit', function(e){
                    e.preventDefault();

                    var u_username = $(this).find('input[alt="username"]').val();
                    var p_password = $(this).find('input[alt="password"]').val();
                   // var s_status = 1;

                    if (u_username === '' && p_password ===''){
                        $('#alert-msg').html('<div class="alert alert-danger"> Required Username and Password!</div>');
                    }else{
                        $.ajax({
                            type: 'POST',
                            url: 'init/controllers/login_process.php',
                            data: {
                                username: u_username,
                                password: p_password
                               // status: s_status
                            },
                            beforeSend:  function(){
                                $('#alert-msg').html('');
                            }
                        })
                        .done(function(t){
                            if (t == 0){
                                $('#alert-msg').html('<div class="alert alert-danger">Incorrect username or password!</div>');
                            }else{
                                $("#btn-student").html('<img src="assets/images/loading.gif" /> &nbsp; Signing In ...');
                                setTimeout(' window.location.href = "student/index.php"; ',2000);
                            }
                        });
                    }
                });
           });
        </script>
        <script>
            function myFunction() {
              var x = document.getElementById("password");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            
     </script>




<!-- INSTRUCTIONS -->
<!-- Container for buttons -->
<div class="button-container" style="display: flex; justify-content: center;">
    <button class="button button1" id="instructions-button" style="background-color: #0197f6; color: black;">Instructions</button>
    <button class="button button1" id="about-us-button" style="background-color: #0197f6;">About Us</button>
    <button class="button button1" id="process-flow-button" style="background-color: #0197f6;">Document Request Process Flow</button>
</div>

<!-- Small information box for instructions content -->
<div id="instructions-box" style="display: none; border: 1px solid #ccc; padding: 10px; max-width: 300px; background-color: white; color: black;">
    <p style="color: black;">Instructions for using the system...
        <br> Step 1: Log in to your Account <br> Step 2: View the Document Types and Information <br> Step 3: Submit a document request <br> Step 4: Submit a receipt or proof payment for your request <br> Step 5: View the status of your request</p>
</div>

<!-- About Us section with a white background and black font -->
<div id="about-us" style="display: none; background-color: white; color: black; padding: 10px;">
    <h1>About Us</h1>
    <p>Welcome to our system! Document Request System for the Oas Community College Registrar's Office allows students to easily request documents online, reducing the need for in-person visits or paper-based requests. Once the request is submitted, the system would automatically send the request to the appropriate admin/staff member for processing, eliminating the need for manual data entry and reducing the risk of errors. This system only focuses on the request system for registrar documents and will not address other student service needs or issues.</p>
</div>

<!-- Small information box for the document request process flow content -->
<div id="process-flow-box" style="display: none; border: 1px solid #ccc; padding: 10px; max-width: 300px; background-color: white; color: black;">
    <p style="color: black;">This is the process of the system...
        <br> Overview: <br> 1. Submission of Request <br> 2. Proof of Payment <br> 3. Submission of Requirements (if applicable) <br> 4. Student Records Processing <br> 5. Releasing</p>
</div>

<!-- JavaScript for button toggles -->
<script>
    // Get references to the buttons and divs
    const instructionsButton = document.getElementById('instructions-button');
    const aboutUsButton = document.getElementById('about-us-button');
    const processFlowButton = document.getElementById('process-flow-button');
    const instructionsBox = document.getElementById('instructions-box');
    const aboutUsDiv = document.getElementById('about-us');
    const processFlowBox = document.getElementById('process-flow-box');

    // Add click event listeners to the buttons
    instructionsButton.addEventListener('click', function() {
        // Toggle the display of the instructions box
        instructionsBox.style.display = 'block';
        aboutUsDiv.style.display = 'none'; // Hide the "About Us" section if it's open
        processFlowBox.style.display = 'none'; // Hide the process flow box if it's open
    });

    aboutUsButton.addEventListener('click', function() {
        // Toggle the display of the "About Us" section
        aboutUsDiv.style.display = 'block';
        instructionsBox.style.display = 'none'; // Hide the instructions if they're open
        processFlowBox.style.display = 'none'; // Hide the process flow box if it's open
    });

    processFlowButton.addEventListener('click', function() {
        // Toggle the display of the process flow box
        processFlowBox.style.display = 'block';
        instructionsBox.style.display = 'none'; // Hide the instructions if they're open
        aboutUsDiv.style.display = 'none'; // Hide the "About Us" section if it's open
    });
</script>
<!-- end of about us -->

<br>

<!-- Announcement Text -->
<div class="announcement-text text-center" style="background-color: white; color: black; padding: 10px;">
    <!-- Add your announcement text here -->
    <h3>For more inquiries or assistance, please feel free to contact our support team.</h3>
    <p>Contact no.: 0931 919 1778<br>Email: occregistrar2000@gmail.com <br> FB Page: https://www.facebook.com/OCCregistrar2000</p>
</div>


    </body>
</html>