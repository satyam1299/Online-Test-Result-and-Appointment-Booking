<?php
session_start();
require 'db.php';

if(isset($_POST['delete_patient']))
{
    $patient_username = mysqli_real_escape_string($conn, $_POST['delete_patient']);

    $query = "DELETE FROM patient WHERE username='$patient_username' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Deleted Successfully";
        header("Location: admin_patient_index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Deleted";
        header("Location: admin_patient_index.php");
        exit(0);
    }
}

if(isset($_POST['update_patient']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $name = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phoneNo']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $query = "UPDATE patient SET fullName='$name', email='$email', phoneNo='$phone', address='$address' WHERE username='$username' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Updated Successfully";
        header("Location: admin_patient_index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Updated";
        header("Location: admin_patient_index.php");
        exit(0);
    }

}


if(isset($_POST['save_patient']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $name = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phone = mysqli_real_escape_string($conn, $_POST['phoneNo']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $query = "INSERT INTO patient (username,fullName,email,password,phoneNo,address) VALUES ('$username','$name','$email','$password','$phone','$address')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Patient Created Successfully";
        header("Location: admin_patient_add.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Created";
        header("Location: admin_patient_add.php");
        exit(0);
    }
}
?>