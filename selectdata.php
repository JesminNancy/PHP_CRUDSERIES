<?php
   
   include 'connect.php';
   
   if(isset($_POST['submit'])){
   
      $city = $_POST['city'];
      
      $insertquery = "INSERT INTO selectdata(place)VALUES('$city')";
      
      $query = mysqli_query($con,$insertquery);
      
      if($query){
        echo "Data Inserted Successfully.";
      }else{
        echo "Not Inserted";
      }
   
   }
   
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Select Option Data</title>
  </head>
  <body>
    
    <div class="container my-5">
      <form method="POST">
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