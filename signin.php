<?php
error_reporting(0);
include('db.php');
session_start();
//remember check user
if(isset($_COOKIE['name']) && $_COOKIE['role']==2){
$_SESSION['name'] = $_COOKIE['name'];
$_SESSION['role'] = $_COOKIE['role'];
echo "<script>alert('welcome $_SESSION[name] with cookie back role is $_COOKIE[role] user');window.location.href='user/userdashboard.php'</script>";
}elseif(isset($_COOKIE['name']) && $_COOKIE['role']==1){
//remember check admin
    $_SESSION['name'] = $_COOKIE['name'];
    $_SESSION['role'] = $_COOKIE['role'];
    echo "<script>alert('welcome $_SESSION[name] with cookie back role is $_COOKIE[role] admin');window.location.href='admin/admindashboard.php'</script>";
    }elseif(isset($_COOKIE['specialization'])){
        //remember check doctor
            $_SESSION['name'] = $_COOKIE['name'];
            $_SESSION['specialization'] = $_COOKIE['specialization'];
            echo "<script>alert('welcome $_SESSION[name] with cookie back specialization is $_COOKIE[specialization]');window.location.href='doctor/doctor.php'</script>";
            }elseif($_SESSION['name'] != "" && $_SESSION['role'] == 1){
    echo "<script>alert('welcome $_SESSION[name] back and role is $_SESSION[role] Admin');window.location.href='admin/admindashboard.php'</script>";    
}elseif($_SESSION['name'] != "" && $_SESSION['role'] == 2){
    echo "<script>alert('welcome $_SESSION[name] back and role is $_SESSION[role] user');window.location.href='user/userdashboard.php'</script>";
}elseif($_SESSION['specialization'] != ""){
    echo "<script>alert('welcome $_SESSION[name] back');window.location.href='doctor/doctor.php'</script>";    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signin</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
  margin: 0;
  padding: 0;
  background-color: lightseagreen;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 10px;
  max-width: 600px;
  height: auto;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
  
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -55px;
 
}
</style>
</head>
<body>
<?php
$ee = "";
$ep = "";
$ie = "";
if(isset($_POST['btnlogin'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
    $remember = $_POST['remember'];
    $soption = $_POST['soption'];

if($soption=="user"){

    if(empty($email)){
        $ee = "Please Enter Email";
    }elseif(empty($password)){
        $ep = "Please Enter Password";
    }else{
       $q = mysqli_query($conn, "SELECT * FROM `tblusers` WHERE `email`='$email' AND `password`='$password'");
       if($q){
           if(mysqli_num_rows($q)>0){
            
            while($row = mysqli_fetch_array($q)){
                $role = $row['role'];
                if(isset($remember)){
                    setcookie('email',$row['email'],time()+60*60*2);
                    setcookie('name',$row['name'],time()+60*60*2);
                    setcookie('role',$row['role'],time()+60*60*2);
                }
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['role'] = $row['role'];
                if($role==1){
                    header("location:admin/admindashboard.php");
                }elseif($role==2){
                    header("location:user/userdashboard.php");
                }
            }
    
           }else{
            $ie = "invalid Details";
            echo "<script>alert('$ie');</script>";
           }
       }
    }
    
//user    ends
//doctor
}elseif($soption=="doctor"){
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
    // $remember = $_POST['remember'];
    // $soption = $_POST['soption'];
    if(empty($email)){
        $ee = "Please Enter Email";
    }elseif(empty($password)){
        $ep = "Please Enter Password";
    }else{
       $q = mysqli_query($conn, "SELECT * FROM `tbldoctors` WHERE `email`='$email' and `password`='$password'");
       if($q){
           if(mysqli_num_rows($q)>0){
            
            while($row = mysqli_fetch_array($q)){
               // $role = $row['role'];
                if(isset($remember)){
                    setcookie('email',$row['email'],time()+60*60*2);
                    setcookie('name',$row['name'],time()+60*60*2);
                    setcookie('specialization',$row['specialization'],time()+60*60*2);
                }
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['specialization'] = $row['specialization'];
                //if($role==1){
                 //   header("location:index.php");
                //}elseif($role==2){
                    header("location:doctor/doctor.php");
               // }
            }
    
           }else{
            $ie = "invalid Details";
            echo "<script>alert('$ie');</script>";
           }
       }
    }
    
    //doctor
}
  
}else{
    $email = "";
    $password = "";
    $soption = "";
}

?>
<div id="login">

<h3 class="text-center text-white pt-5">Welcome To HCP</h3>
        <h3 class="text-center text-white pt-5">Login Here</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <!-- Form -->
                   <p>  </p> 
                        <form  class="form" action="" method="post">
                        <h3 class="text-center lead">Don't Have Account Register Here<a href="signup.php" style="text-decoration:none;"> As User</a><br><a href="signupd.php" style="text-decoration:none;">As Doctor</a></h3>
                        <h3 class="text-center lead">Please Enter Correct Information</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>"> <p style="color:red;"><?php if($ee){echo $ee;} ?></p>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>"> <p style="color:red;"><?php if($ep){echo $ep;} ?></p>
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="text-info">Remember Me:</label>&nbsp;
                                <input type="checkbox" name="remember"> 
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="text-info">Signin As:</label>&nbsp;<br>
                                <input type="radio" name="soption" value="user" <?php if($soption=="user"){ echo "checked"; }?>> User <input type="radio" name="soption" value="doctor" <?php if($soption=="doctor"){ echo "checked"; }?>> Doctor 
                            </div>
                            
                            <div class="form-group" style="margin-top:30px;">
                                <input type="submit" name="btnlogin" class="btn btn-info btn-md" value="submit">
                                <a href="index.php" class="btn btn-danger">Cancel</a>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>