
<?php
 
 include 'connect.php';
 
  if(isset($_POST['submit'])){
 
    $datas = $_POST['data'];
    //  echo $datas;
    
    $allData = implode(",",$datas);
    // echo $allData;
    
    $sql = " insert into mutipledata(checkboxdata) values('$allData')";
    
    $result = mysqli_query($con, $sql);
    
    if($result){
      echo "Data Inserted Suceesfully";  
    }else{
      die(mysqli_error($con));
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

    <title>Multiple Data</title>
  </head>
  <body>
    
    <div class="container my-5">
    <form method="POST">
    <div class="input-group-text">
      <input type="checkbox" name="data[]" value="javascript">Javascript
    </div>
    <div class="input-group-text my-3">
      <input type="checkbox" name="data[]" value="react">React
    </div>
    <div class="input-group-text my-3">
      <input type="checkbox" name="data[]" value="html">HTML
    </div>
    <div class="input-group-text my-3">
      <input type="checkbox" name="data[]" value="css">CSS
    </div>
  
    <button class="btn btn-dark my-2" name="submit">Submit</button>
    </form>
    </div>

  </body>
</html>