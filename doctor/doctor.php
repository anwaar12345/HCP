<?php
include('dheader.php');
if($_GET['id']){

  $qs = mysqli_query($conn,"SELECT * FROM `tbldoctors` WHERE `id`='$_GET[id]'");
if(mysqli_num_rows($qs) > 0){
    $row = mysqli_fetch_array($qs);
}


}else{
  $qs = mysqli_query($conn,"SELECT * FROM `tbldoctors` WHERE `email`='$_SESSION[email]' and `name`='$_SESSION[name]' and `specialization`='$_SESSION[specialization]'");
  if(mysqli_num_rows($qs) > 0){
      $row = mysqli_fetch_array($qs);
  }
  
}
if(isset($_POST['submit'])){
  $datetime = str_replace('T',' ',$_POST['datetime']);
  $_SESSION['date'] = substr($datetime, 0, -6);
  $_SESSION['time'] = substr($datetime, 10, 11);
  echo $_SESSION['date']." time ".$_SESSION['time'];
}
?>
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
            <li class="breadcrumb-item active"><?php echo $row['name']; ?></li>
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
              <img src="../upload/<?php echo $row['certimage'];?>" class="img-fluid" width="200px">
            </div>
            <div class="post-meta">
            <?php
              $payment = mysqli_query($conn,"SELECT * FROM `payment_hcp` WHERE `user_id`='$_SESSION[id]'");
              if(mysqli_num_rows($payment) > 0){
                  $pay_row = mysqli_fetch_array($payment);
              
            ?>
              <h1 class="article-title">Dr.<?php echo $row['name']; ?>&nbsp;&nbsp;&nbsp;<button class="btn btn-info"><a href="../calling/index.php?id=<?php echo $row['id'] ?>" style="text-decoration: none !important;">call</a></button></h1>                 
              <form action="" method="post">
              <label for="birthdaytime">Kindly select Date and time:</label>
              <input type="datetime-local" id="date" name="datetime">
              <input type="submit" value="select time" name="submit">
              </form>
           <?php
              }else{
                if($_SESSION['role']== 1 || $_SESSION['role'] == 2){
                ?>
                <a href="../booking/index.php?id=<?php echo $row['id'] ?>"class="btn btn-info">Get Appointment</a></h1>
                <form action="" method="post">
                <label for="birthdaytime">Kindly select Date and time:</label>
                <input type="datetime-local" id="date" name="datetime">
                <input type="submit" value="select time" name="submit">
                </form>
                <?php
              }}
              $_SESSION['docid'] = $row['id'];
              ?>    
            </div>
            <div class="article-content">
              <p>Hi i am Dr.<?php echo $row['name']; ?> from pakistan ..... 
              </p>
              
            </div>
          </div>
          <div class="box-comments">
            <div class="title-box-2">
              <h4 class="title-comments title-left">Availability</h4>
            </div>
            <ul class="list-comments">
              <li>
                <div class="comment-avatar">
                  <img src="../img/testimonial-2.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Reviewer no 1</h4>
                  <span>18 Sep 2019</span>
                  <p>Testing Maju
                  </p>
                </div>
              </li>
              
                <div class="comment-avatar">
                  <img src="../img/testimonial-4.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Reviewer no 2</h4>
                  <span>27 nov 2019</span>
                  <p>
                    Maju Mid Exams
                  </p>
                 
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">

          
               <div class="widget-sidebar widget-tags">
            <h5 class="sidebar-title">Degrees</h5>
            <div class="sidebar-content">
              <ul>
                <li>
                  <a href="#" style="pointer-events: none;"><?php echo $row['qualification']; ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!----->
        <div class="col-md-4">

          
<div class="widget-sidebar widget-tags">
<h5 class="sidebar-title">Availability</h5>
<div class="sidebar-content">
<ul>
<?php
              $ava = mysqli_query($conn,"SELECT * FROM `docavalibility` WHERE `docid`='$_SESSION[docid]'");
              if(mysqli_num_rows($ava) > 0){
                  $rowa = mysqli_fetch_array($ava);
                 
            ?>
  
 <li>
 <a href="#" style="pointer-events: none;"><?php echo $rowa['time']." Days ".$rowa['days']; ?></a>
 </li>
              <?php }?>
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
  <script type='text/javascript'>
$(function(){

    $("#date").on('change', function () {
        var date = Date.parse($(this).val());
        if (date < Date.now()) {
            alert('Selected date must be greater than today date');
            $(this).val('');

        }
    });  
})    

    
</script>

</body>
</body>
</html>
