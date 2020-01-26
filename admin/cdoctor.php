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
             <div class="row">
             <div class="col-md-12">
             <?php
             $q = mysqli_query($conn,"SELECT * FROM `tbldoctors` where `status`=1 or `status`=3");
             if(mysqli_num_rows($q)>0){
            
             }else{
                echo "No Doctors pending for approvel";       
             }
             ?>
             <form action="actions.php" method='post'>
         <table class='table'>
                    <thead>
                      <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Contact</th>
                        <th>Profile Picture</th>
                        <th>Registration</th>
                        <th>Qualification</th>
                        <th>Specialization</th>
                        <th>Actions</th>

                      </tr>
                   
                    </thead>
                    <tbody>
                    
                    <?php
                    
                          while($row = mysqli_fetch_array($q)){
                            
                            echo "<tr>
                            <td>$row[email]</td>
                            <td><a href='view.php?id=$row[id]'>$row[name]</a></td>
                            <td>$row[faname]</td>
                            <td>$row[contact]</td>
                            <td><img src='../upload/$row[certimage]' width='100px'></td>
                            <td>$row[regno]</td>
                            <td>$row[qualification]</td>
                            <td>$row[specialization]</td> 
                            <td><a href='actionu.php?id=$row[id]' class='btn btn-info' style='margin:5px;'>Approve</a>&nbsp;<a href='actionb.php?id=$row[id]' class='btn btn-danger'>Block</a></td>
                            </tr>";
                        }
                       
                      ?>
                      
                    </tbody>
                  </table>
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