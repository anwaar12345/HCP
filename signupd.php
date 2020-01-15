<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>| Doctor Registeration |</title>
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
$eg = "";

if(isset($_POST['btns'])){
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lstname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $name = "$fname $lstname";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $rnumber = mysqli_real_escape_string($conn, $_POST['rnumber']);
    $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
    $dimage = $_FILES['dimage']['name'];
    $dimove = $_FILES['dimage']['tmp_name'];
    $cimage = $_FILES['cimage']['name'];
    $cimove = $_FILES['cimage']['tmp_name'];
    $folder1 = "upload/$dimage";
    $folder2 = "upload/$cimage";
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

if(move_uploaded_file($dimove,$folder1) && move_uploaded_file($cimove,$folder2)){
$q = mysqli_query($conn, "INSERT INTO `tbldoctors`(`name`, `email`, `contact`, `address`, `regno`, `qualification`, `degimage`, `certimage`, `city`, `country`, `specialization`, `password`, `gender`) VALUES ('$name','$email','$contact','$address','$rnumber','$qualification','$dimage','$cimage','$city','$country','$specialization','$password','$gender')");
if($q){
    echo "<script>alert('Registered Successfully');window.location.href='signin.php';</script>";
}
}else{
    echo "failed";
}

}else{
    $fname = "";
    $lstname = "";
    $email = "";
    $contact = "";
    $address = "";
    // $folder1 = "";
    // $folder2 = "";
    $rnumber = "";
    $qualification = "";
    $dimage = "";
    $cimage = "";
    $city = "";
    $country = "";
    $specialization = "";
    $password = "";
    $gender = "";
}

?>
<div id="login">

<h3 class="text-center text-white pt-5">join as a Doctor</h3>

        <h3 class="text-center text-white pt-5">Register Here</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <!-- Form -->
                 
                        <form  class="form" action="" method="post" enctype="multipart/form-data">
                        <h3 class="text-center lead">Have An Account<a href="signin.php" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;Signin Here</a></h3>
                            <h3 class="text-center lead">Please Enter Correct Information</h3>
                            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                <label for="name" class="text-info">First Name:</label><br>
                                <input type="text" name="firstname" class="form-control" required value="<?php echo $fname; ?>"> <p style="color:red;"><?php if($ne){echo $ne;} ?></p> 
                            </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                                <label for="lastname" class="text-info">Last Name:</label><br>
                                <input type="text" name="lastname"  class="form-control" required value="<?php echo $lstname; ?>"> <p style="color:red;"><?php if($le){echo $le;} ?></p>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" class="form-control" required value="<?php echo $email; ?>"> <p style="color:red;"><?php if($ne){echo $ne;} ?></p> 
                            </div>
                        
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                                <label for="number" class="text-info">Contact Number:</label><br>
                                <input type="text" name="contact"  class="form-control" required value="<?php echo $contact; ?>"> <p style="color:red;"><?php if($le){echo $le;} ?></p>
                            </div>
                    </div>

                </div>
                    
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                <label for="address" class="text-info">Address:</label><br>
                                <textarea name="address" required cols="32" rows="2" style="resize:none;"><?php echo $address; ?></textarea> 
                            </div>
                        
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                                <label for="rnumber" class="text-info">Registeration Number:</label><br>
                                <input type="text" name="rnumber" required  class="form-control" value="<?php echo $rnumber; ?>"> <p style="color:red;"><?php if($le){echo $le;} ?></p>
                            </div>
                    </div>
                    
                </div>
                
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                <label for="Qualification" class="text-info">Qualification:</label><br>
                                <input type="text" name="qualification" class="form-control" required value="<?php echo $qualification; ?>"> <p style="color:red;"><?php if($ne){echo $ne;} ?></p> 
                            </div>
                        
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                                <label for="dimage" class="text-info">Degree picture:</label><br>
                                <?php if($dimage!=""){   ?>
                                <?php echo "<img src='$folder1' height='100px' width='100px'>";}?>
                                <input type="file" name="dimage"  required class="form-control"> <p style="color:red;"><?php if($le){echo $le;} ?></p>
                            </div>
                    </div>

                </div>

                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                <label for="Certificate" class="text-info">Profile picture:</label><br>
                                <?php if($cimage!=""){   ?>
                                <?php echo "<img src='$folder2' height='100px' width='100px'>";}?>
                                <input type="file" name="cimage" required class="form-control"> <p style="color:red;"><?php if($ne){echo $ne;} ?></p> 
                            </div>
                        
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                                <label for="city" class="text-info">City:</label><br>
                                <input type="text" name="city" required class="form-control" value="<?php echo $city; ?>"> <p style="color:red;"><?php if($le){echo $le;} ?></p>
                            </div>
                    </div>

                </div>
                
                
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                <label for="country" class="text-info">Country:</label><br>
                                <input type="text" name="country" class="form-control" required value="<?php echo $country; ?>"> <p style="color:red;"><?php if($ne){echo $ne;} ?></p> 
                            </div>
                        
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                                <label for="specialization" class="text-info">Specialization:</label><br>
                                <input type="text" name="specialization"  class="form-control" required value="<?php echo $specialization; ?>"> <p style="color:red;"><?php if($le){echo $le;} ?></p>
                            </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" class="form-control" required value="<?php echo $password; ?>"> <p style="color:red;"><?php if($ne){echo $ne;} ?></p> 
                            </div>
                        
                    </div>
                    <div class="col-md-6">
                    <div class="form-group" style="margin-top:13px;">
                                <label for="gender" class="text-info">Gender:</label><br>
                                <input type="radio"  name="gender" value="male" required <?php if($gender=="male"){echo "checked";} ?> >&nbsp;&nbsp;Male&nbsp;&nbsp;<input type="radio" name="gender" value="female" <?php if($gender=="female"){echo "checked";} ?>>&nbsp;&nbsp;Female 
                            </div>
                                  
                </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <input type="submit" name="btns" class="btn btn-info btn-lg" value="submit">
                                <a href="index.php" class="btn btn-danger btn-lg">Cancel</a>          
                    </div>
                        
                    </div>
                    </div>
                </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>