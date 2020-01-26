<?php
include('../db.php');
// echo "$_GET[id]";
$q = mysqli_query($conn,"SELECT * FROM `tbldoctors` where `id`=$_GET[id]");
$row = mysqli_fetch_array($q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>| Doctors Details |</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  <!-- Favicons -->
  <link href="../img/final.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

</head>

<body>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll" href="admindashboard.php"><img src="../img/final.png" style="height: 40px; width: 100px; border-radius: 5px;">&nbsp;&nbsp;Admin Dashoard</a>
       
      </div>
    </nav>
    <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div class="intro intro-single route bg-image" style="background-image: url(../img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Doctors Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Doctor</a>
            </li>
            <li class="breadcrumb-item active"><?php echo "$row[name]";?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <!--/ Section Dcotor Star /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="post-box">
            <div class="post-thumb">
              <img src="../upload/<?php echo $row['certimage']; ?>" class="img-fluid" alt="" width="200px;">
            </div>
            <div class="post-meta">
              <h1 class="article-title">Dr. <?php echo "$row[name]";?>&nbsp;&nbsp;&nbsp;<input type="submit" value="Message" class="btn btn-info"></h1>     
            </div>
            <div class="article-content">
              <p>Hi i am <?php echo "$row[name]";?> from pakistan ..... 
              </p>
              
            </div>
          </div>
          <div class="box-comments">
            <div class="title-box-2">
              <h4 class="title-comments title-left">Degree Picture</h4>
            </div>
            <ul class="list-comments">
              <li>
              <img src="../upload/<?php echo $row['degimage'];?>"  class="img-fluid" width="200px">
                    <br>               
                <div class="comment-details">
                  <h4 class="comment-author"><?php echo $row['qualification'];?></h4>
                  <span>Registration Number</span>
                  <p><?php echo $row['regno'];?>
                  </p>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          
        <div class="widget-sidebar widget-tags">
            <h5 class="sidebar-title">Degree</h5>
            <div class="sidebar-content">
              <ul>
                <li>
                  <a href="#"><?php echo "$row[qualification]";?></a>
                </li>
              </ul>
            </div>
            <h5 class="sidebar-title">Specialization</h5>
            <div class="sidebar-content">
              <ul>
                <li>
                  <a href="#"><?php echo "$row[specialization]";?></a>
                </li>
              </ul>
            </div>
          
            
          </div>
          <div class="widget-sidebar widget-tags">
            <h5 class="sidebar-title">City</h5>
            <div class="sidebar-content">
              <ul>
                <li>
                  <a href="#"><?php echo "$row[city]";?></a>
                </li>
              </ul>
            </div>
            <h5 class="sidebar-title">Country</h5>
            <div class="sidebar-content">
              <ul>
                <li>
                  <a href="#"><?php echo "$row[specialization]";?></a>
                </li>
              </ul>
            </div>
          
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>Health Consultancy Portal</strong>. All Rights Reserved</p>
              
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
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/popper/popper.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/counterup/jquery.waypoints.min.js"></script>
  <script src="../lib/counterup/jquery.counterup.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>
  <script src="../lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  
  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
