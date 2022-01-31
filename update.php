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
      
      <?php
          
          include 'connect.php';
          
            $id = $_GET['id'];
            
            $showquery = " SELECT * FROM seriescrud WHERE id={$id} ";
            
            $showdata = mysqli_query($con, $showquery);
            
            $arrresult = mysqli_fetch_array($showdata);
            
 
 
                 if(isset($_POST['submit'])){
                      $idupdate = $_GET['id'];
                      $fname = $_POST['fname'];
                      $lname = $_POST['lname'];
                      $email = $_POST['email'];
                      $mobile = $_POST['mobile'];
                      $datas = $_POST['data'];
                      $gender = $_POST['gender'];
                      $city = $_POST['city'];
                      
                      $allData = implode(" ",$datas);
                      
                    $updatequery = " update seriescrud set id=$idupdate, fname='$fname', lname='$lname',email='$email',mobile='$mobile',multipledata= '$allData', gender='$gender', place='$city' where id=$idupdate"; 
                      
                      
                      $result = mysqli_query($con,$updatequery);
                      
                      if($arrresult){
                        // echo "Data Updated";
                        header('location:read.php');
                        
                      }else{
                        echo "Data not Updated";
                      }
                 } 
                 
 
 
                  ?>
      
      <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" placeholder="Enter First Name" name="fname" autocomplete="off" value="<?php echo $arrresult['fname'];?>"> 
      </div>
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Enter Last Name" name="lname" autocomplete="off" value="<?php echo $arrresult ['lname'];?>"> 
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" value="<?php echo $arrresult ['email'];?>"> 
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="tel" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value="<?php echo $arrresult ['mobile'];?>"> 
      </div>
        
        <div>
        <input type="checkbox" name="data[]" value="javascript">Javascript
        <input type="checkbox" name="data[]" value="react">React
        <input type="checkbox" name="data[]" value="html">HTML
        <input type="checkbox" name="data[]" value="css">CSS
        </div>
        
        <div>
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
        
        
      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
    </div>

    
  </body>
</html>