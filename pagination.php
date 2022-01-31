<?php

include 'connect.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Pagination</title>
  </head>
  <body>
    <div class="container my-5">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL NO.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>
  <tbody>
  
      <?php
      
      $sqli = "SELECT * FROM seriescrud";
      $query = mysqli_query($con,$sqli);
      $num =mysqli_num_rows($query);
      // echo $num;
      // Creating Pagination Button
      
      $numberpage = 3;
      $totalpage = $num/$numberpage;
      // echo $totalpage;
      
      for($btn=1; $btn<= $totalpage; $btn++){
        echo '<button class="btn btn-dark mx-1 mb-3"><a href="pagination.php?page='.$btn.'" class="text-light">'.$btn.'</a></button>';
      }
      
      if(isset($_GET['page'])){
        $page = $_GET['page'];
        // echo $page;
      }else{
        $page = 1;
      }
      
      $startinglimit = ($page-1)*$numberpage;
      
      $sql = "SELECT * FROM seriescrud LIMIT " . $startinglimit . ',' . $numberpage;
      
      $query = mysqli_query($con, $sql);
      
      while($result=mysqli_fetch_assoc($query)){
        
        echo '<tr>
        <th scope="row">'.$result['id'].'</th>
        <td>'.$result['fname'].'</td>
        <td>'.$result['lname'].'</td>
        <td>'.$result['mobile'].'</td>
       </tr>';
        
      }
      
    
      
      ?>  
  </tbody>
</table>
    </div>
  </body>
</html>