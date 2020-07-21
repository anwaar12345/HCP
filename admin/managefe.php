<?php
include('header.php');

include('sidebar.php');
     

if(isset($_POST['submit'])){

    $animted_text = $_POST['animated_text'];
    $about_us = $_POST['about_us'];
    
    $q = mysqli_query($conn,"INSERT INTO `front_end_management`(`animated_text`,`about_us`) VALUES ('$animted_text','$about_us')");
    
    if($q){
        $message = "Inserted Successfully";
    }else{
        $message = "Insertion failed";
    } 
 }else{
    $animted_text = "";
    $about_us = "";
    $message = "";
 }


    ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
             <div class="row">
             <div class="col-md-12">
            <form  class="form" action="" method="post" enctype="multipart/form-data">
                            <h3 class="text-center lead">Front-End Content Management</h3>
                            <h5 class="text-danger">
                            <?php
                            if(isset($message)){
                            echo $message;
                             }
                            ?></h5>
                            <div class="form-group">
                                <label for="name" class="text-info">Animated Text Content:</label><br>
                                <textarea name="animated_text" cols="20" rows="5" class="form-control" style="resize:none;"></textarea> 
                            </div>
                            <div class="form-group">
                                <label for="name" class="text-info">Animated Text Content:</label><br>
                                <textarea name="about_us" cols="20" rows="5" class="form-control" style="resize:none;"></textarea> 
                            </div>
                            <div class="form-group" style="margin-top:30px;">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                <a href="managefe.php" class="btn btn-danger">Cancel</a>
                            </div>
                            
                         </form>

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
<?php
include('footer.php');
?>