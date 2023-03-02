<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medical Management System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/header_style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="brand">
			<!-- <img src="https://img.icons8.com/external-nawicon-flat-nawicon/344/external-hospital-medical-nawicon-flat-nawicon.png"  height="30px" width="30px"> -->
			<h2>Uni Hospital</h2>
		</div>
		<!-- 	this is for menu -->
		<div class="navbar navbar-default nav">
		<div class="topic">Hey, <b><?php echo $_SESSION['username']; ?> !</b></div>
			<nav class="menu">
				<ul>
					<li><a href="doc_home.php">Home</a></li>
					<li><a href="doc_appointment.php">Scheduled Appointment</a></li>
					<li><a href="doc_upload_test_result.php">Upload Test Result</a></li>
					<li><a href="logout.php">Logout</a></li>
					
				</ul>
			</nav>
		</div>
	
