<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Doctor Home Page</title>
    <link rel="stylesheet" href="css/user_style.css" />
    <link rel="stylesheet" href="css/welcome_style.css">
    <link rel="stylesheet" href="css/gallery_style.css">
    <link rel="stylesheet" href="css/doc_home_style.css">
</head>
<body>
    <?php include('doc_header.php'); ?>
    <!-- this is for donor registraton -->
    <div class="slider">
        <div class="images">
            <input type="radio" name="slide" id="img1" checked>
            <input type="radio" name="slide" id="img2">
            <input type="radio" name="slide" id="img3">
            <input type="radio" name="slide" id="img4">
            <img class='m1'  src="https://qph.fs.quoracdn.net/main-qimg-4f637d989792bf63647b7a650f83019b" alt="img1" />
            <img class='m2'  src="https://www.lpu.in/student_services/images/uni-hospital/2.jpg" alt="img2" />    
            <img class='m3'  src="https://th.bing.com/th/id/OIP.FIF_zSWojF73w-rVpGl2tgHaE7?pid=ImgDet&rs=1" alt="img3" />
            <img class='m4'  src="ihttps://qph.fs.quoracdn.net/main-qimg-1cb6d2ff5328dee590e887feab8f2dd2" alt="img4" />
        </div>
        <div class="dots">
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
            <label for="img4"></label>
        </div>
    </div>
    


	
    <!--Main section-->
    <main>
        <div class="intro">
            <h1>++++++++++++++++++</h1>
            <p>The Knowledge to Save Lives. The Location to Save Time.</p>
            <br>
            <button id="welcome_btn"> 
                <p>Welcome</p>
            </button>
        </div>
        <div class="achievements">
            <div class="work">
            <i class="fas fa-atom"></i>
            <p class="work-heading">Innovation</p>
            <p class="work-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae quod laudantium reiciendis aliquid iste praesentium.</p>
            </div>
            <div class="work">
            <i class="fas fa-skiing"></i>
            <p class="work-heading">Research</p>
            <p class="work-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, eveniet fugit reiciendis corporis rem possimus!</p>
            </div>
            <div class="work">
            <i class="fas fa-ethernet"></i>
            <p class="work-heading">Ideas</p>
            <p class="work-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit vero adipisci quam mollitia, cupiditate sit.</p>
            </div>
        </div>
        <div class="about-me">
            <div class="about-me-text">
            <h2>About Hospital</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus excepturi autem rerum impedit eaque distinctio beatae laudantium pariatur quae reprehenderit.</p>
            </div>
            <img src="https://wallpapercave.com/wp/wp2386912.jpg" alt="wallpaper">
        </div>
    </main>
 <?php include('patient_footer.php'); ?>

	</div><!--  containerFluid Ends -->
</body>
</html>