<?php
session_start();
require 'db.php';

if(isset($_POST['submit_appoint_form']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phoneno = mysqli_real_escape_string($conn, $_POST['phno']);
    $appointdate = mysqli_real_escape_string($conn, $_POST['adate']);
    $timing = mysqli_real_escape_string($conn, $_POST['time']);
    $description = mysqli_real_escape_string($conn, $_POST['msg']);

    $query = "INSERT INTO appointbooking (name,phno,adate,time,msg) VALUES ('$name','$phoneno','$appointdate','$timing','$description')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "You have successfully booked an appointment";
        header("Location: appointment.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header("Location: appointment.php");
        exit(0);
    }
}
?>