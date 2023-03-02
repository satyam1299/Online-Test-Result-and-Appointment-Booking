<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Contact Page</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/patient_contact_style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['submit'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($conn, $name);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        $phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($conn, $phone);
        $message = stripslashes($_REQUEST['message']);
        $message = mysqli_real_escape_string($conn, $message);
        $query = "INSERT into `feedback` (name, email, phone, message)
                     VALUES ('$name', '$email', '$phone', '$message')";
        $result = mysqli_query($conn, $query);
        if($result) 
        {
            echo "<div class='form'>
                  <h3>We will get in touch with you.</h3><br/>
                  <p class='link'>Click here to <a href='patient_home.php'>Go Back</a>to Home Page</p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Something went wrong.</h3><br/>
                  <p class='link'>Click here to <a href='patient_home.php'>Go Back</a> to Home Page.</p>
                  </div>";
        }
    } else {
    ?>

    <!-- partial:index.partial.html -->
    <div id="bg">
        <a href="patient_home.php" class="btn btn-danger float-end">BACK</a>
    </div>

    <form>
        <h1 style="text-align: center;">Contact Us</h1>
        <br>
        <div class="form-field">
            <input type="text" name="name" placeholder="Name" required/>
        </div>

        <div class="form-field">
            <input type="email" name="email" placeholder="Email Id" required/>
        </div>
        
        <div class="form-field">
            <input name="phone" placeholder="Mobile No" maxlength="10" required>
        </div>

        <div class="form-field">
            <input name="message" placeholder="Comment" maxlength="200" required>                 
        </div>
        
        <div class="form-field">
            <button class="btn" name="submit" value="submit" type="submit">Send</button>
        </div>
    </form>

    
    <?php
    }
    ?>
</body>
</html>

