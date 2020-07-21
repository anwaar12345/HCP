<?php
session_start();
include('../db.php');

if(isset($_GET['id'])){
   
$q = mysqli_query($conn, "DELETE FROM `tblusers` WHERE id='$_GET[id]'");    
if($q){
    header("location: users.php");
}


}


?>