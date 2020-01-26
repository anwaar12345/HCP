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
             $q = mysqli_query($conn,"SELECT * FROM `tbldoctors` WHERE `status`=2");
             if(mysqli_num_rows($q)>0){
            
             }else{
                echo "All Doctors are not Approved";       
             }
             ?>
         
            
         <table class='table'>
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        
                        <th>Contact</th>
                        <th>Profile Picture</th>
                        <th>Registration</th>
                        <th>Qualification</th>
                        <th>Specialization</th>
                        

                      </tr>
                   
                    </thead>
                    <tbody>
                    
                    <?php
                    
                          while($row = mysqli_fetch_array($q)){
                            
                            echo "<tr>
                            <td>$row[id]</td>
                            <td><a href='view.php?id=$row[id]'>$row[name]</a></td>
                        
                            <td>$row[contact]</td>
                            <td><img src='../upload/$row[certimage]' width='100px'></td>
                            <td>$row[regno]</td>
                            <td>$row[qualification]</td>
                            <td>$row[specialization]</td>
                            </tr>";
                        }
                       
                      ?>
                      
                    </tbody>
                  </table>
         
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