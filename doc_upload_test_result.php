<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Upload Test Result</title>
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
            $fullname    = stripslashes($_REQUEST['Pname']);
            $fullname    = mysqli_real_escape_string($conn, $fullname);
            $test = stripslashes($_REQUEST['Test']);
            $test = mysqli_real_escape_string($conn, $test);
            $desc = stripslashes($_REQUEST['Description']);
            $desc = mysqli_real_escape_string($conn, $desc);
            $query    = "INSERT into `uploadtestresult` (username, Pname, Test, Description)
                        VALUES ('$username', '$fullname', '$test', '$desc')";
            $result   = mysqli_query($conn, $query);
            if ($result) {
                echo "<div class='form'>
                    <h3>You have successfully uploaded the test result.</h3><br/>
                    <p class='link'>Click here to <a href='doc_home.php'>Go Back</a></p>
                    </div>";
            } else {
                echo "<div class='form'>
                    <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='doc_upload_test_result.php'>Go Back</a> again.</p>
                    </div>";
            }
        } else {
    ?>
    <form class="form" method="post">
        <h1 class="login-title">Upload Patient Test Result</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="Pname" placeholder="Patient Name">
        <input type="text" class="login-input" name="Test" placeholder="Type of Test">
        <textarea name="Description" placeholder="Result of Test" class="login-input" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="Upload" class="login-button">
    </form>
    <?php
        }
    ?>
</body>
</html>