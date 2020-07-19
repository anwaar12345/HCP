<?php
include('dheader.php');

$qs = mysqli_query($conn,"SELECT * FROM `tblusers` WHERE `email`='$_SESSION[email]' and `name`='$_SESSION[name]'");
if(mysqli_num_rows($qs) > 0){
    $row = mysqli_fetch_array($qs);
}
?>
    <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div class="intro intro-single route bg-image" style="background-image: url(../img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">User Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">User</a>
            </li>
            <li class="breadcrumb-item active">information</li>
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
        <div class="col-md-6">
          <div class="post-box">
            <div class="post-thumb">
              <img src="../upload/<?php echo $row['image'];?>" class="img-fluid" width="200px">
            </div>
            <div class="post-meta">
              <h1 class="article-title">Dr <?php echo $row['name']; ?>&nbsp;&nbsp;&nbsp;<input type="submit" value="Message" class="btn btn-info"></h1>     
            </div>
            <div class="article-content">
              <p>Hi i am <?php echo $row['name']; ?> from pakistan ..... 
              </p>
              
            </div>
          </div>
         
        </div>
        <div class="col-md-6">
          
          
               <div class="widget-sidebar widget-tags">
            <h5 class="sidebar-title">My Appointments</h5>
            <div class="sidebar-content">
              <ul>
                <li>
                  <a href="#" style="pointer-events: none;">Dr Danish Iqbal</a>
                </li>
                <li>
                <a href="#"><?php echo date('D M Y'); ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(../img/overlay-bg.jpg)">
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
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
