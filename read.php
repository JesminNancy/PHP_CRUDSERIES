<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <title>Read</title>
  </head>
  <body>
    <div class="container my-5">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Checkboxdata</th>
              <th scope="col">RadioData</th>
              <th scope="col">City</th>
              <th scope="col">Operation</th>
            </tr>
          </thead>
          <tbody>
          
          <?php
          
          include 'connect.php';
          
          $queryr =" SELECT * FROM seriescrud";
          
          $result = mysqli_query($con, $queryr);
          
          $res = mysqli_fetch_assoc($result);
          
          while($res = mysqli_fetch_assoc($result)){
            
            ?>
            
            <tr>
            <th scope="row"><?php echo $res['id'];?></th>
            <td><?php echo $res['fname'];?></td>
            <td><?php echo $res['lname'];?></td>
            <td><?php echo $res['email'];?></td>
            <td><?php echo $res['mobile'];?></td>
            <td><?php echo $res['multipledata'];?></td>
            <td><?php echo $res['gender'];?></td>
            <td><?php echo $res['place'];?></td>
            <td><a href="update.php?id=<?php echo $res['id'];?>" class="btn btn-dark">Update</a></td>
            <td><a href="delete.php?deleteid=<?php echo $res['id'];?>" class="btn btn-danger">Delete</a></td>
          </tr>
            
          <?php
          
          }
          
          
          ?>
          
 
  
          </tbody>
    </table>
    </div>

  </body>
</html>