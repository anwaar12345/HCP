<?php
include('../db.php');
$id = $_GET['id'];
$q1 = mysqli_query($conn,"SELECT * FROM `tbldoctors` where `id` = $id");
$row = mysqli_fetch_array($q1);
if($row['status']==1){

    $q = mysqli_query($conn,"UPDATE `tbldoctors` SET `status` = 3 WHERE `tbldoctors`.`id` = $id");
    if($q){
        echo "<script>alert('Profile Has been Blocked');window.location.href='cdoctor.php';</script>";
        
    }
    }elseif($row['status']==3){
    echo "<script>alert('Already Blocked');window.location.href='cdoctor.php';</script>";
}elseif($row['status']==2){
    echo "<script>alert('Already Blocked');window.location.href='cdoctor.php';</script>";
}
?>