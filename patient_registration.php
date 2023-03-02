<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Patient - Registration</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
        $name    = stripslashes($_REQUEST['fullName']);
        $name    = mysqli_real_escape_string($conn, $name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $phone = stripslashes($_REQUEST['phoneNo']);
        $phone = mysqli_real_escape_string($conn, $phone);
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($conn, $address);
        $query    = "INSERT into `patient` (username, fullName, email, password, phoneNo, address)
                     VALUES ('$username', '$name', '$email', '$password', '$phone', '$address')";
        $result   = mysqli_query($conn, $query);
        if ($result) 
        {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='patient_login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='patient_registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
    ?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required>
        <input type="text" class="login-input" name="fullName" placeholder="Your Full Name" required>
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="number" class="login-input" name="phoneNo" placeholder="Phone No." pattern="[0-9]{10}" required>
        <input type="text" class="login-input" name="address" placeholder="Address" maxlength="100" required>
        <input type="password" class="login-input" name="password" placeholder="Password" min="6" required>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="patient_login.php">Click to Login</a></p>
    </form>
    <?php
        }
    ?>
</body>
</html>