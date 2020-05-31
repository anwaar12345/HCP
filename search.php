<?php
include('db.php');

$q = mysqli_query($conn, "SELECT * FROM `tbldoctors` WHERE specialization = '$_GET[specialization]' and country = '$_GET[country]' and city = '$_GET[city]'");
if(mysqli_num_rows($q) > 0){
    while($row = mysqli_fetch_array($q)){
        echo " <table class='table table-hover'>
        <thead>
          <tr>
            <th>Name</th>
            <th>Father Name</th>
            <th>Degree</th>
            <th>Specialization</th>
            <th>Country</th>
            <th>City</th>
            <th>Profile Image</th>
          </tr>
        </thead>
        <tbody>
          <tr>
       
            <td><a href='doctor/doctor.php?id=$row[id]'>$row[name]</a></td>
            <td>$row[faname]</td>
            <td>$row[qualification]</td>
            <td>$row[specialization]</td>
            <td>$row[country]</td>
            <td>$row[city]</td>
            <td><img src='upload/$row[certimage]' width='100px' height='100px'></td>
          </tr>
        </tbody>
      </table> ";
        
    }
    
}else{
    echo "no data";
}

?>

