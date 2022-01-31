<?php

include 'connect.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Search Data</title>
  </head>
  <body>
  
    <div class="container my-5">
    <form method="POST">
      <input type="text" placeholder="Search Items" name="search">
      <button type="submit" class="btn btn-dark btn-sm" name="submit">Search</button>
    </form>
    </div>
    <div class="container my-5">
        <table class="table">
          <?php
          
          if(isset($_POST['submit'])){
            $search = $_POST['search'];
            
            $sql = "SELECT * FROM seriescrud WHERE id like '%$search%' or fname like'%$search%' or lname like '%$search%'";
            $result = mysqli_query($con,$sql);
            
            if($result){
              if(mysqli_num_rows($result) > 0){
                echo '<thead>
                  <tr>
                  <th>Sl NO.</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  </tr>
                </thead>';
                while($row = mysqli_fetch_assoc($result)){
                echo '<tbody>
                  <tr>
                    <td><a href="searchdata.php?data='. $row['id'].'">'. $row['id'].'</a></td>
                    <td>'. $row['fname'].'</td>
                    <td>'. $row['lname'].'</td>
                  </tr>
                </tbody>';
              }
              }else{
                echo "<h2 class=text-danger>Data not found</h2>";
              }
            }
          }
          
          
          ?>
        </table>
    </div>

  </body>
</html>