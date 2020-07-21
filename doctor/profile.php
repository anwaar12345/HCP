<?php
include('header.php');
?>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
     <?php
     include('sidebar.php');
     
     

     $qs = mysqli_query($conn,"SELECT * FROM `tbldoctors` WHERE `email`='$_SESSION[email]' and `name`='$_SESSION[name]' and `specialization`='$_SESSION[specialization]'");
     if(mysqli_num_rows($qs) > 0){
         $row = mysqli_fetch_array($qs);
     }
    

    ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                <h3 class="text-center text-white pt-5 mr-4">Update Profile</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <!-- Form -->
                        <form  class="form" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="text-info">First Name:</label><br>
                                <input type="text" name="firstname" class="form-control" value="<?php echo $row['name']; ?>"> 
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="contact" class="text-info">Contact:</label><br>
                                <input type="text" name="contact"  class="form-control" value="<?php echo $row['contact']; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="profile" class="text-info">Profile Picture:</label><br>
                                <?php if($row['certimage']!=""){   ?>
                                <?php echo "<img src='../upload/$row[certimage]' height='200px' width='200px'> <br> $row[certimage]";}?>
                                <input type="file" name="image"  class="form-control" > <p style="color:red;">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="text-info">Gender:</label><br>
                                <input type="radio" name="gender" value="Male" Required <?php if($row['gender']=="Male"){ echo "checked"; } ?>> Male <input type="radio" name="gender" value="Female" <?php if($row['gender']=="Female"){ echo "checked"; } ?>> Female 
                            </div>
                            <div class="form-group" style="margin-top:30px;">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                <a href="profile.php" class="btn btn-danger">Cancel</a>
                            </div>
                            
                         </form>
                    </div>
                </div>
            </div>
        </div>

                </div>
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