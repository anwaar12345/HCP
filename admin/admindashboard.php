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
                    <h1 class="lead" margin="100px">Welcome Admin {<?php echo " $row[name] ";?>} !</h1>
                    <img src="../upload/<?php echo $row['image']; ?>" width="200px;">
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