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

  $q1 = mysqli_query($conn,"SELECT call_details.meeting_url,call_details.time,call_details.status,tblusers.name,tblusers.id FROM call_details INNER JOIN tblusers ON call_details.user_id = tblusers.id where doctor_id ='$_SESSION[id]'");
  if(mysqli_num_rows($q1)>0){
  
  $row = mysqli_fetch_array($q1);
     
  
  
  ?>
    <tr>
      <th scope="col">User id#</th>
      <th scope="col">User Name</th>
      <th scope="col">Time</th>
      <th scope="col">Meeting url</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php if($row['status'] == 0){ ?>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><a href="../user/user.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
      <td><?php echo $row['time']; ?></td>
      <td style="overflow:hidden"> <a href="<?php echo $row['meeting_url']; ?>" target="_blank">Call Url</a></td>
    </tr>
    <?php }else{ ?>
    <tr>
    <th scope="row">no data</th>
    </tr>
    <?php } ?>
  <?php }else{
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
})    
    
</script>
</html>