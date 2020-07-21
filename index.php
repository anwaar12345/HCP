<?php 
//include('db.php');
error_reporting(0);
session_start();
include('db.php');
$q = mysqli_query($conn,"SELECT DISTINCT specialization FROM `tbldoctors`");
if(mysqli_num_rows($q) > 0){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>| Health Consultancy Portal |</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <!-- Favicons -->
  <link href="img/final.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <style>
  .dropbtn {
  background-color: lightseagreen;
  color: white;
  padding: 13px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: lightseagreen;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
  </style>
<script>
$(document).ready(function(){
  
$("#search").click(function(e){

e.preventDefault;

let specialization = $("#specialization").val();
let country = $("#country").val();
let city = $("#city").val();

$.ajax({
  url:  "search.php",
  type: "get",
  crossDomain:true,
  data: {specialization : specialization,country : country,city : city },
  success: function(data,status,xhr){
  
    $('#doctors').html(data);  
    $('#dataModal').modal("show");



  
  }
});
}

);



});
</script>
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><img src="img/final.png" style="height: 40px; width: 100px; border-radius: 5px;"></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact US</a>
          </li>
          <?php
              if($_SESSION['name']==""){
                //header("location:signin.php");
        echo '  <li class="nav-item">
        <a class="nav-link js-scroll" href="signin.php">Signin</a>
    </li>
   
    <li class="nav-item">
      <div class="dropdown">
        <button class="dropbtn">
          Registere here
        </button>
        <div class="dropdown-content">
          <a href="signup.php">SignUP As User</a>
          <a href="signupd.php">SignUP As Doctor</a>
        </div>
      </div>
    </li>';
              }elseif($_SESSION['name']!=""){

              ?>
          <li class="nav-item">
          <div class="dropdown">
          <a class="dropbtn" href="logout.php" style="color:black;">Logout</a>
          </div>
          </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/download.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">HCP</h1>
          <?php   
          $qs = mysqli_query($conn,"SELECT * FROM `front_end_management`");
          if(mysqli_num_rows($qs) > 0){
          $row1 = mysqli_fetch_array($qs);
          }  
          ?>
          <p class="intro-subtitle"><span class="text-slider-items"><?php echo $row1['animated_text']; ?></span><strong class="text-slider"></strong></p>



   <select class="inputg" name="specialization" required id="specialization">
   <?php

while($row = mysqli_fetch_array($q)){
    echo "<option value='$row[specialization]'>".$row['specialization']."</option>";
}


?> 
   </select><input type="text" class="inputg" placeholder="Country ...!" name="country" id="country" required><input type="text" placeholder="City ...!" class="inputg" name="city" id="city" required><input type="submit" class="btn btn-primary" value="Search" style="margin-bottom: 5px;width: 100px;" id="search" name="search">

<div id="dataModal" class="modal fade text-dark" style="overflow: scroll;">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                       
                     <h4 class="modal-title">Search Results</h4>  
                </div>  
                <div class="modal-body" id="doctors">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
          <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button" style="border-radius: 50px; opacity: 0.6;"><i class="fa fa-chevron-down"></i></a></p>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About Us
                    </h5>
                  </div>
                  <p class="lead">
                   <?php echo $row1['about_us']; ?>
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                  
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Registration Process
            </h3>
            <p class="subtitle-a">
              Basic Registration Process.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-monitor"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Open Your favourite Browser</h2>
              <p class="s-description text-center">
                Then Search for www.hcp.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-code-working"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Now Signup & Choose Role (Doctor/User)</h2>
              <p class="s-description text-center">Fill the SignUP form Properly
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-monitor"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Start Using our Services</h2>
              <p class="s-description text-center">
                Now use HCP Portal as you need and you must add Payment Method to get Verified
              </p>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-6">
          <div class="counter-box counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">450</p>
              <span class="counter-text">Consultancy COMPLETED</span>
            </div>
          </div>
        </div>
      
        <div class="col-sm-6 col-lg-6">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-people"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">550</p>
              <span class="counter-text">Registered Users</span>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Available Specialist Doctors
            </h3>
            <p class="subtitle-a">
              Following Doctors are Available.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/doc.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/doc.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Dr. ABC</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Heart Surgeon</span> From <span class="w-date">Peshawer</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/doc1.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/doc1.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Dr. Abc new</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Physician</span> from <span class="w-date">Quetta</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/d.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/d.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Dr. New</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Neurosurgeon</span> from <span class="w-date">Karachi</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/dc1.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/dc1.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Dr. Swiss</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Orthopedic Surgeon</span> from <span class="w-date">karachi</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/dc2.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/dc2.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Dr. khi</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Skin Specialist</span> from <span class="w-date">Lahore</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/dc3.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/dc3.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Dr. newone</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Dentist</span> from <span class="w-date">Islamabad</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->

  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                <span class="author">Abc Registered User</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                  HCP provides great Platform to Diagnose Health Problems by Proffessional doctors
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                <span class="author">Registered User</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                  Best Platform Available ...!
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Doctors Star /-->
  <section  class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
            Top Rated Doctors
            </h3>
            <p class="subtitle-a">
              These are the HCP Top Rated Doctors.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="doctor/doctor.php"><img src="img/dc1.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Heart Specialist</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="doctor/doctor.php">Dr. XYZ </a></h3>
              <p class="card-description">
                She is one of the best Heart Specialits Doctors Available on HCP Platform 
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">Reviews</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="doctor.html"><img src="img/dc2.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Neurosergeon</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">Dr.Abc</a></h3>
              <p class="card-description">
                Best Neurosergeon in karachi and Sindh
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">Reviews</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="doctor.html"><img src="img/dc3.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Dentist</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">Dr. ABCXYZ</a></h3>
              <p class="card-description">
               Best Dentist from Islamabad
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">Reviews</span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> 10 min
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Contact Us
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch with us
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Give HCP Suggestion For Improvements in Process and Services ...!
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span>Block 6 PECHS Mohammad Ali Jinnah University Karachi</li>
                      <li><span class="ion-ios-telephone"></span> (+92) 0335-2874297</li>
                      <li><span class="ion-email"></span> contact@HCP.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-email"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-youtube"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <?php echo date("Y"); ?><strong> Health Consultancy Portal</strong>. All Rights Reserved</p>
             
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <!-- ajax -->
  
</body>
</html>
