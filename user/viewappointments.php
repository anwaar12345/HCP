<?php
include('header.php');
?>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
     <?php
     include('sidebar.php');
     
    ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                <h1>my appointments</h1>
                </div> 
            </div>
            <div class="row">
            <table class="table">
  <thead>
  <?php

  $q1 = mysqli_query($conn,"SELECT call_details.meeting_url,call_details.id,call_details.time,call_details.doctor_id,tbldoctors.name,call_details.status FROM call_details INNER JOIN tbldoctors ON call_details.doctor_id = tbldoctors.id where user_id ='$_SESSION[id]'");
  if(mysqli_num_rows($q1)>0){
  
  ?>
    <tr>
      <th scope="col">Appointment no#</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Time</th>
      <th scope="col">Meeting url</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  while($row = mysqli_fetch_array($q1)){

  ?>
    <tr>
    <?php if($row['status'] == 0){ ?>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><a href="../doctor/doctor.php?id=<?php echo $row['doctor_id']; ?>"><?php echo $row['name']; ?></a></td>
      <td><?php echo $row['time']; ?></td>
      <td style="overflow:hidden"> <a href="<?php echo $row['meeting_url']; ?>" target="_blank">Call Url</a></td>
    </tr>
    <?php }elseif($row['status']==1){ ?>
    <tr>
    <div class="hidden">
    <h1 class="lead">Kindly Fill Review</h1>
    <form  class="form-horizontal" method="post" action="#">
                                    
                                    <div style="margin-bottom: 25px" class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                <input  type="text" class="form-control" name="review">                                        
                                            </div>
                                        
        
                                        <div style="margin-top:10px" class="form-group">
                                            <!-- Button -->
        
                                            <div class="col-sm-12 controls">
                                            <input type="submit" class="btn btn-success" value="Fill Review" name="submit">
        
                                            </div>
                                        </div>
        
                            </form>     
                            </div>
  <?php
       
   ?>     
    </tr>
    <?php 
  
  } ?>
  <?php  if(isset($_POST['submit'])){
   $review = mysqli_query($conn,"INSERT INTO `reviews`(`user_id`,`doctor_id`, `review`) VALUES ($_SESSION[id],$row[doctor_id],'$_POST[review]')");
    if($review){
      echo "<p>Done</p>";
    }
  }}}else{
?>    
  <tr>
     <td> No data</td>
  </tr>

  <?php }

    ?>
  </tbody>
</table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
</body>
<script>
$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });

    if($('p').text = "done"){
     
      $('.hidden').hide();
      $('p').hide();
    }


})    
    
</script>
</html>