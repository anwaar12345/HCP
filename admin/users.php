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
             $q = mysqli_query($conn,"SELECT * FROM `tblusers` where id !='$_SESSION[id]'");
             if(mysqli_num_rows($q)>0){
            
             }else{
                echo "No data";       
             }
             ?>
             <form action="actions.php" method='post'>
         <table class='table'>
                    <thead>
                      <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Profile Picture</th>
                        <th>Gender</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php
                    
                          while($row = mysqli_fetch_array($q)){
                            
                            echo "<tr>
                            <td>$row[email]</td>
                            <td>$row[name]</a></td>
                            <td>$row[contact]</td>
                            <td><img src='../upload/$row[image]' width='100px'></td>
                            <td>$row[gender]</td>
                            <td><a href='delete.php?id=$row[id]' class='btn btn-danger' style='margin:5px;'>Delete</a></td>
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
<?php
include('footer.php');
?>