<?php

include('../db.php');

$q = mysqli_query($conn,"UPDATE `call_details` SET `status`=1 WHERE id = $_GET[id]");
if($q){
    $s = mysqli_query($conn,"SELECT * FROM `call_details` WHERE id =$_GET[id]");
    if(mysqli_num_rows($s) > 0){
    $row = mysqli_fetch_assoc($s);
  
    $s1 = mysqli_query($conn,"SELECT * FROM `payment_hcp` WHERE user_id = $row[user_id] AND doctor_id = $row[doctor_id]");
    if($s1){
        $row1 = mysqli_fetch_assoc($s1);
        
        $amountdiv = $row1['amount'] / 100;
        $amounthcp = $amountdiv * 20;       
        $s3 = mysqli_query($conn,"UPDATE `payment_hcp` SET `amount`=$amounthcp WHERE user_id = $row1[user_id] AND doctor_id = $row1[doctor_id]");
        if($s3){
            $amountpay = $amountdiv * 80;
            echo $amountpay;
            $s4 = mysqli_query($conn,"INSERT INTO `payments`(`user_id`, `doctor_id`, `amount`) VALUES ($row1[user_id],$row1[doctor_id],$amountpay)");
        if($s4){
            header("location: completedappointments.php");
        }
        }
    }
    }
    
}else{
    echo "failed";
}
?>