<?php

include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Data</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <?php
  
  $data = $_GET['data'];
  // echo $data;
  $sql = "select * from seriescrud where id=$data";
  
  $result = mysqli_query($con, $sql);
  if($result){
    $row = mysqli_fetch_assoc($result);
    echo '  <div class="container">
    <div class="jumbotron">
    <h1 class="display-4 text-center text-success">'. $row['fname'].'</h1>
    <p class="lead text-center text-danger">Your email is:'. $row['email'].'</p>
    <hr class="my-4">
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Back</a>
    </p>
  </div>
    </div>';
  }
 
  ?>
  

</body>
</html>