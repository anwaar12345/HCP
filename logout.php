<?php
session_start();
$_SESSION['name'] == "";
$_SESSION['email'] == "";
$_SESSION['role'] == "";
$_SESSION['specialization'] == "";
setcookie('email',"",time()-8432);
setcookie('name',"",time()-8432);
setcookie('role',"",time()-8432);
setcookie('specialization',"",time()-8432);
session_destroy();
header("location:index.php");

?>