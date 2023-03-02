<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Online Test Results</title>
    <link rel="stylesheet" href="css/user_style.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php include('patient_header.php'); ?>

    <?php
    include('db.php');
    $sql = "SELECT * FROM `uploadtestresult`";
    "; 
    $query = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($query);
    if($rows == 1)
    {  
        echo "<table border='1'>";
        echo "<tr><th>Patient Name</th><th>Test</th><th>Test Result</th><tr>";
        while($row = mysqli_fetch_assoc($query))
        {  
        
            
            echo "<tr><td>{$row['Pname']}</td>"."<td>{$row['Test']}</td>"."<td>{$row['Description']}</td></tr>";
            
        }
        echo "</table>";   
    }
    else 
    {
        echo "<h1>No result available</h1>";
    }
    ?>

    <?php include('patient_footer.php'); ?>
	
</body>
</html>