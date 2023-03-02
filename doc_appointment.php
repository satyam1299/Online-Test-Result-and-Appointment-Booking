<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Scheduled Appointments</title>
    <link rel="stylesheet" href="css/user_style.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php include('doc_header.php'); ?>

    <?php
    require('db.php');
    $sql = "Select * from appointbooking";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query) > 0)
    {  
        while($row = mysqli_fetch_assoc($query))
        {  
            echo "<table border='1'>";
            echo "<tr><th>Patient Name</th><th>Phone No.</th><th>Date of Appointment</th><th>Timing</th><th>Reason of Booking Appointment</th><tr>";
            echo "<tr><td>{$row['name']}</td>"."<td>{$row['phno']}</td>"."<td>{$row['adate']}</td>"."<td>{$row['time']}</td>"."<td>{$row['msg']}</td></tr>";
            echo "</table>";
        }   
    }
    else 
    {
        echo "<h1>No result available</h1>";
    }
    ?>

    <?php include('patient_footer.php'); ?>

</body>
</html>