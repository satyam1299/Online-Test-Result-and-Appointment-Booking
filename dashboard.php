<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard_style.css">
    
    <title>Uni Hospital-Dashboard</title>
    <style>
          
    /*Main Section of a body*/
    .home {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .content > h3 {
        font-size: 50px;
        font-weight: 600;
        color: rgb(139, 119, 119);
    } 
    .content p {
        font-size: 20px;
        line-height: 1.5;
    }
    .content img {
        border-radius: 50%;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }

    /*about section*/
    .row .content {
        padding-left: 30px;
    }
    #about_heading {
        color: rgb(139, 119, 119);
    }
    .about .row{
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap:2rem;
    }
    .about .row .image{
        flex:1 1 45rem;
    }
    .about .row .image img{
        width: 100%;
    }
    .about .row .content{
        flex:1 1 45rem;
    }
    .about .row .content h3{
        color: var(--black);
        text-shadow: var(--text-shadow);
        font-size: 3.5rem;
        line-height: 1.8;
    }
    .about .row .content p{
        color: var(--light-color);
        padding:1rem 0;
        font-size: 1.2rem;
        line-height: 1.8;
    }

    /*review section*/
    .heading {
        text-align: center;
        font-size: 50px;
        font-weight: 600;
        color: rgb(139, 119, 119);
    }
    .box-container {
        width: 100%;
        display: flex;
    }
    .box-container div {
        padding-left: 20px;
        padding-right: 20px;
        text-align: center;
        box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    }
    .box img {
        border-radius: 50%;
        box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    }
    .box .text {
        line-height: 1.0;
    }

    </style>
</head>
<body>
  <header>
    <div class="brand  display__logo">
      <img src="https://img.icons8.com/external-nawicon-flat-nawicon/344/external-hospital-medical-nawicon-flat-nawicon.png"  height="30px" width="30px">
      <h2>Uni Hospital</h2>
    </div>
    <div class="nav">
      <ul class="nav__items">
        <li class="nav__item"><a href="#home" class="nav__link">Dashboard</a></li>
        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
        <li class="nav__item"><a href="admin_login.php" class="nav__link">Admin Panel</a></li>
        <li class="nav__item"><a href="doc_login.php" class="nav__link">Doctor Panel</a></li>
        <li class="nav__item"><a href="patient_login.php" class="nav__link">Patient Panel</a></li>
        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
      </ul>
    </div> 
  </header>

  <main>
    <section class="home" id="home">
      <div class="image">
        <img src="img/home-img.svg" alt="Doctor Image" width="700px" height="750px">
      </div>
      <div class="content">
          <h3>stay safe, stay healthy</h3>
          <p>RIGHT NOW, Our focus is on Hospital operations and taking care of our patients</p>
          <img src="https://th.bing.com/th/id/R.d843b5f16ba56fe8ed4c318a7cbcc11d?rik=95V%2bEfZcPli%2bsA&riu=http%3a%2f%2fcdn.lowgif.com%2fmedium%2fc151b57c82673af7-healthcare-animation-by-austin-pietrobono-dribbble.gif&ehk=8akvcpOqSyijXEbyQh%2bkXuf5cjrTd4w1xEfjS0i%2fv2E%3d&risl=&pid=ImgRaw&r=0" alt="GIF">
      </div>
    </section>

    <!-- about section starts  -->
    <section class="about" id="about">
    <div class="row">
        <div class="content">
            <h3 id="about_heading">we take care of your healthy life</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
        </div>
        <div class="image">
            <img src="img/about-img.svg" alt="">
        </div>
    </div>
    </section>
    <!-- about section ends -->
 
    <!-- review section starts  -->
    <section class="review" id="review">   
      <h1 class="heading"> client's <span>review</span> </h1>
      <br> <br>
      <div class="box-container">
          <div class="box">
              <img src="img/pic-1.png" alt="">
              <h3>Ayush Tyagi</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
          </div>
          <div class="box">
              <img src="img/pic-2.png" alt="">
              <h3>Shakira</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
          </div>
          <div class="box">
              <img src="img/pic-3.png" alt="">
              <h3>Salmaan Khan</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
          </div>
      </div>
    </section>
    <!-- review section ends -->
  </main>

  <!-- footer section -->
  <footer class="footer" id="contact">
    <div class="last">
      <p class="footer_heading">Customer Care</p>
      <p>Contact Us</p>
      <p>FAQs</p>
      <p>Terms of Services</p>
      <p>Privacy Policy</p>
    </div>
    <div class="last">
      <p class="footer_heading">My Account</p>
      <p>Sign In/Register</p>
      <p>Careers</p>
      <p>GE Magazine</p>
      <p>About Us</p>
    </div>
    <div class="last">
      <p class="footer_heading">Contact info</p>
      <a href="#"> <i class="fas fa-phone"></i> 89234387563 </a> <br> <br> <br>
      <a href="#"> <i class="fas fa-phone"></i> 9837465839 </a> <br> <br> <br>
      <a href="#"> <i class="fas fa-envelope"></i> lpuhospital@gmail.com </a> <br> <br> <br>
      <a href="#"> <i class="fas fa-envelope"></i> helpdesk@gmail.com </a> <br> <br> <br>
      <a href="#"> <i class="fas fa-map-marker-alt"></i> Punjab, India - 4411102 </a> <br> <br> <br>
    </div>
    <div class="last">
      <p class="footer_heading">Follow us</p>
      <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a> <br> <br> <br>
      <a href="#"> <i class="fab fa-twitter"></i> twitter </a> <br> <br> <br>
      <a href="#"> <i class="fab fa-google"></i> google </a> <br> <br> <br>
      <a href="#"> <i class="fab fa-instagram"></i> instagram </a> <br> <br> <br> 
      <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a> <br> <br> <br>
      <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a> <br> <br> <br>
    </div>
  </footer>
</body>
</html>