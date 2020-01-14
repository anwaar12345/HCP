<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
$ne = "";
$le = "";
$ee = "";
$ep = "";
$ec = "";
$ei = "";
$er = "";

if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $lstname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $image = $_FILES['image']['name'];
    $image_move = $_FILES['image']['tmp_name'];
    $folder = "upload/$image";
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    if(empty($fname)){
        $ne = "Please Enter First Name";
    }elseif(empty($lstname)){
        $le = "Please Enter Last Name";
    }elseif(empty($email)){
        $ee = "Please Enter Email Address";
    }elseif(empty($password)){
        $ep = "Please Enter Password";
    }elseif(empty($contact)){
        $ec = "Please Enter Your Contact";
     }elseif(empty($image)){
        $ei = "Please Enter Your Image";
     }elseif(empty($role)){
        $er = "Please Select Role";
     }
}

?>
<div id="login">

<h3 class="text-center text-white pt-5">Welcome To HCP</h3>
        <h3 class="text-center text-white pt-5">Register Here</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <!-- Form -->
                   <p>  </p> 
                        <form  class="form" action="" method="post" enctype="multipart/form-data">
                            
                            <h3 class="text-center lead">Please Enter Correct Information</h3>
                            <div class="form-group">
                                <label for="name" class="text-info">First Name:</label><br>
                                <input type="text" name="firstname" class="form-control"> <p style="color:red;"><?php if($ne){echo $ne;} ?></p> 
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="text-info">Last Name:</label><br>
                                <input type="text" name="lastname"  class="form-control"> <p style="color:red;"><?php if($le){echo $le;} ?></p>
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" class="form-control"> <p style="color:red;"><?php if($ee){echo $ee;} ?></p>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" class="form-control"> <p style="color:red;"><?php if($ep){echo $ep;} ?></p>
                            </div>
                            <div class="form-group">
                                <label for="contact" class="text-info">Contact:</label><br>
                                <input type="text" name="contact"  class="form-control"> <p style="color:red;"><?php if($ec){echo $ec;} ?></p>
                            </div>
                            
                            <div class="form-group">
                                <label for="profile" class="text-info">Profile Picture:</label><br>
                                <input type="file" name="image"  class="form-control"> <p style="color:red;"><?php if($ei){echo $ei;} ?></p>
                            </div>
                            <div class="form-group">
                                <label for="gender" class="text-info">Gender:</label><br>
                                <input type="radio" name="gender" value="Male" Required> Male <input type="radio" name="gender" value="Female"> Female 
                            </div>
                            <div class="form-group">
                                <label for="role" class="text-info">Select Your Role:</label><br>
                                <p style="color:red;"><?php if($er){echo $er;} ?></p>
                                <select name="role" class="form-control">
                                <option value="1">User</option>
                                <option value="2">Doctor</option>
                                </select>
                            </div> 
                            
                            <div class="form-group" style="margin-top:30px;">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                <a href="index.html" class="btn btn-danger">Cancel</a>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>