<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/appoint_form_style.css">
    <title>Appointment Portal</title>
</head>
<body>
    <div id="bg">
        <a href="appointment.php" class="btn btn-danger float-end">BACK</a>
    </div>
    
    <!-- booking section starts   -->
    <?php include('message.php'); ?>
    <div class="login-box">
        <h2>Schedule an Appointment</h2>
        <form action="code3.php" method="POST">
            <div class="user-box">
                <input type="text" name="name" required>
                <label>Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="phno" maxlength="10" required>
                <label>Phone No.</label>
            </div>
            <div class="user-box">
            <input type="date" name="adate" required>
            </div>
            <div class="user-box">
            <input type="time" name="time" required>
            </div>
            <div class="user-box">
            <input name="msg" class="box" maxlength=100 required>
                <label>Reason for booking Appointment</label>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit_appoint_form" class="btn btn-primary">Book Now</button>
            </div>
        </form>

    <!-- booking section ends -->
</body>
</html>