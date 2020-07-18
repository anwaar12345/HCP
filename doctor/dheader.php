<?php
session_start();
if($_GET['id']){
  
}else{
  if($_SESSION['name'] == "" && $_SESSION['email'] == ""){
    header("location:../signin.php");
  }elseif($_SESSION['specialization'] == "" && $_SESSION['name'] == "" && $_SESSION['email'] == ""){
    header("location:../signin.php");
  }

}
include('../db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>| Doctors Details |</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  <!-- Favicons -->
  <link href="../img/final.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

</head>

<body>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll" href="../index.php"><img src="../img/final.png" style="height: 40px; width: 100px; border-radius: 5px;"></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
          aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
          <ul class="navbar-nav">
            <li class="nav-item" style="color:red;">
              <a class="nav-link js-scroll active" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll" href="doctordashboard.php" style="color:black;">Dashboard</a>
            </li>
          
          </ul>
        </div>
      </div>
    </nav>