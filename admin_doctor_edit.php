<?php
session_start();
include('db.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Doctor Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Doctor Details Edit 
                            <a href="admin_doctor_index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['username']))
                        {
                            $username = mysqli_real_escape_string($conn, $_GET['username']);
                            $query = "SELECT * FROM doctor WHERE username='$username' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $doctor = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code2.php" method="POST">
                                    <input type="hidden" name="username" value="<?= $doctor['username']; ?>">

                                    <div class="mb-3">
                                        <label>Doctor Name</label>
                                        <input type="text" name="fullName" value="<?=$doctor['fullName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Doctor Email</label>
                                        <input type="email" name="email" value="<?=$doctor['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_doctor" class="btn btn-primary">
                                            Update Doctor
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Doctor Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>