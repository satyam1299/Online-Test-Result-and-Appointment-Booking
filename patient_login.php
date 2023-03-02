<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Patient - Login</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `patient` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            
            // Redirect to user dashboard or home page
            header("Location: patient_home.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='patient_login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Patient Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required>
        <input type="password" class="login-input" name="password" placeholder="Password" required>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="patient_registration.php">Dont have an account? Click here</a></p>
    </form>
<?php
    }
?>
</body>
</html>