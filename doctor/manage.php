<?php
include('header.php');
?>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
     <?php
     include('sidebar.php');
     
        
        if(isset($_POST['update'])){
            $time = $_POST['time'];
            $days = $_POST['days'];
            $message = "";
            $q = mysqli_query($conn,"UPDATE `docavalibility` SET `time`='$time',`days`='$days' WHERE docid ='$row[id]' ");
            if($q){
                $message = "Updated Successfully";
            }else{
                $message = "Update failed";
            } 
         }else{
             $time = "";
             $days = "";
             $message = "";
         }
        ?>
    <div class="container">    
        <div id="loginbox" style="margin-top:120px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Manage Availability Timing</div>
            <h5 class="text-danger"><?php
            if(isset($message)){
                echo $message;
                }
            ?></h5>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <?php
    $q =  mysqli_query($conn,"SELECT * FROM `docavalibility` where docid=$row[id]");
    if(mysqli_num_rows($q) > 0){
        $row = mysqli_fetch_array($q);
        
    }
    ?>
                            
                        <form  class="form-horizontal" method="post" action="#">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        <input  type="time" class="form-control" name="time" value="<?php echo date('H:i', strtotime($row['time']));?>" placeholder="Update Time">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        <input id="login-password" type="text" class="form-control" name="days" placeholder="day to day" value="<?php echo $row['days'];?>">
                                    </div>
                                


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                    <input type="submit" class="btn btn-success" value="Update Availability" name="update">

                                    </div>
                                </div>

                    </form>     



                        </div>                     
                    </div>  
        </div> 
        