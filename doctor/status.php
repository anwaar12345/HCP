<?php

include('../db.php');

echo "$_GET[id]'";

$q = mysqli_query($conn,"UPDATE `call_details` SET `status`=1 WHERE id = $_GET[id]");
if($q){
    header("location: completedappointments.php");
}else{
    echo "failed";
}
?>