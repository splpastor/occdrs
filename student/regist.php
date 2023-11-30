<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

<!-- Add these lines to your existing head section -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="regist_process.php">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        
        <label for="middle_name">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name" required><br><br>
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
        
        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required><br><br>
        
        <label for="year_level">Year Level:</label>
        <input type="text" id="year_level" name="year_level" required><br><br>
        
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required><br><br>
        
        <label for="date_ofbirth">Date of Birth:</label>
        <input type="text" id="date_ofbirth" name="date_ofbirth" required><br><br>
        
        <label for="complete_address">Complete Address:</label>
        <input type="text" id="complete_address" name="complete_address" required><br><br>
        
        <label for="email_address">Email Address:</label>
        <input type="email" id="email_address" name="email_address" required><br><br>
        
        <label for="mobile_number">Mobile Number:</label>
        <input type="text" id="mobile_number" name="mobile_number" required><br><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
     <!--   <input type="hidden" id="status" name="status" value="Active"> -->
        
        <input type="submit" value="Register">
    </form>

    

</body>
</html>
