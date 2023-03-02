<?php
session_start();
require 'db.php';

if(isset($_POST['delete_doctor']))
{
    $username = mysqli_real_escape_string($conn, $_POST['delete_doctor']);

    $query = "DELETE FROM doctor WHERE username='$username' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Doctor Deleted Successfully";
        header("Location: admin_doctor_index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Doctor Not Deleted";
        header("Location: admin_doctor_index.php");
        exit(0);
    }
}

if(isset($_POST['update_doctor']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $name = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $query = "UPDATE doctor SET fullName='$name', email='$email' WHERE username='$username' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Doctor Updated Successfully";
        header("Location: admin_doctor_index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Doctor Not Updated";
        header("Location: admin_doctor_index.php");
        exit(0);
    }

}


if(isset($_POST['save_doctor']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $name = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "INSERT INTO doctor (username,fullName,email,password) VALUES ('$username','$name','$email','$password')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Doctor Created Successfully";
        header("Location: admin_doctor_add.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Doctor Not Created";
        header("Location: admin_doctor_add.php");
        exit(0);
    }
}
?>