<?php

include 'connect.php';

if(isset($_POST['submit'])){
  
    $gender = $_POST['gender'];
    
    $sql = " insert into radiodata (gender) values('$gender')";
    
    $query = mysqli_query($con, $sql);
  
  if($query){
    echo "data of radio button inserted";
  }else{
    die(mysqli_errno($con));
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

    <title>Radio Button Data</title>
  </head>
  <body>
    
    <div class="container my-5">
      <form method="POST">
        <div>
        <input type="radio" name="gender" value="male">Male
        </div>
        <div>
        <input type="radio" name="gender" value="female">Female
        </div>
        <div>
        <input type="radio" name="gender" value="kids">Kids
        </div>

      <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
    </form>
    </div>

    
  </body>
</html>