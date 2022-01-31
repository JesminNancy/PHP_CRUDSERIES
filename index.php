<?php

include 'connect.php';
 
 if(isset($_POST['submit'])){
        
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $datas = $_POST['data'];
      $allData = implode(",",$datas);
      $gender = $_POST['gender'];
      $city = $_POST['city'];
      
      
      
      $insertquery = "INSERT INTO seriescrud (fname,lname,email,mobile,multipledata,gender,place)VALUES('$fname','$lname','$email','$mobile','$allData','$gender','$city')"; 
      
      
      $res = mysqli_query($con,$insertquery);
      
      if($res){
        echo "Data Inserted";
      }else{
        echo "Data not inserted";
      }
 } 
 
 
 
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head>
  <body>
    
    <div class="container my-5">
      <form method="POST">
      <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" placeholder="Enter First Name" name="fname" autocomplete="off"> 
      </div>
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Enter Last Name" name="lname" autocomplete="off"> 
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off"> 
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="tel" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off"> 
      </div>
      
      <div>
      
      <input type="checkbox" name="data[]" value="javascript">Javascript
      <input type="checkbox" name="data[]" value="react">React
      <input type="checkbox" name="data[]" value="html">HTML
      <input type="checkbox" name="data[]" value="css">CSS
    
      </div>
      
      <div class="my-2">
      Gender:
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="kids">Kids
      </div>
      
      <select name="city">
          <option value="">Select City</option>
          <option value="dhaka">Dhaka</option>
          <option value="barisal">Barisal</option>
          <option value="khulna">Khulna</option>
        </select>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>

    
  </body>
</html>