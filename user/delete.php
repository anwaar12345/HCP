<?php

include('../db.php');
if(isset($_GET['id'])){

$delete = mysqli_query($conn, "DELETE FROM `call_details` WHERE id=$_GET[id]");
if($delete){
    header("location: viewappointments.php");
}else{
    echo "Failed";
}
}


?>