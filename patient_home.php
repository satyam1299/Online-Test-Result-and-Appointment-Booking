<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Patient - Home</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/user_style.css" />
    <link rel="stylesheet" href="css/patient_home_style.css" />
</head>
<body>
    <?php include('patient_header.php'); ?>
	<div class="main_content" style="background-color:#fff;">
		<div class="col-md-12">
            <!--Gallery-->
            <div class="maindiv">
                
            </div>
            <!-- doctors section starts  -->
            <section class="doctors" id="doctors">
            <h1 class="heading"> our <span>doctors</span> </h1>
            <div class="box-container">
                <div class="box">
                    <img src="img/doc-4.jpg">
                    <h3>Nawazuddin Siddiqui</h3>
                    <span>Expert doctor</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/doc-5.jpg">
                    <h3>RamKumar Mishra</h3>
                    <span>expert doctor</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/doc-6.jpg">
                    <h3>Pankaj Chauhan</h3>
                    <span>expert doctor</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>
            </section>
        <!-- doctors section ends -->
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         
    </div>
    <?php include('patient_footer.php'); ?>
    </div><!--  containerFluid Ends -->
</body>
</html>