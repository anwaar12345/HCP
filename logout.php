<?php
session_start();
$_SESSION['name']=="";
setcookie('email',"",time()-8432);
setcookie('name',"",time()-8432);
session_destroy();
header("location:index.php");

?>