<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
    include('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['admin_username'])) {
        $username = stripslashes($_REQUEST['admin_username']);    // removes backslashes
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['admin_password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `admin` WHERE admin_username='$username'
                     AND admin_password='$password'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['admin_username'] = $username;
            
            // Redirect to user dashboard page
            header("Location: admin_home.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='admin_login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Admin Login</h1>
        <input type="text" class="login-input" name="admin_username" placeholder="Your Username"/>
        <input type="password" class="login-input" name="admin_password" placeholder="Your Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
    </form>
<?php
    }
?>
</body>
</html>