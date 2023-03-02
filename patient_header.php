<!-- <?php session_start(); ?> -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Nunito:ital@1&family=Source+Code+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/header_style.css">
	<title>About Page</title>
</head>
<body bgcolor="red">
	<div class="container-fluid">
		<div class="brand">
			<!-- <img src="https://img.icons8.com/external-nawicon-flat-nawicon/344/external-hospital-medical-nawicon-flat-nawicon.png"  height="30px" width="30px" > -->
			<h2>Uni Hospital</h2>
		</div>
		
		<!-- 	this is for menu -->
		<div class="navbar navbar-default nav">
			<div class="topic"> <p>Hey, <b><?php echo $_SESSION['username']; ?> !</b></p></div>
				<nav class="menu">
					<ul>
						<li><a href="patient_home.php">Home</a></li>
						<li><a href="patient_about.php">About Us</a></li>
						<li><a href="patient_contact.php">Contact Us</a></li>
						<li><a href="appointment.php">Appointment</a></li>
						<li><a href="test_result.php">Test Result</a></li>
						<li><a href="logout.php">Logout</a></li>
						
					</ul>
				</nav>
			</div>
	
