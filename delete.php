<?php

include 'connect.php';

$id = $_GET['deleteid'];

$sql = " delete from seriescrud where id=$id ";

$query = mysqli_query($con, $sql);

if($query){
  // echo " Data deleted suceesfully";
  
  header('location:read.php');
  
}else{
  echo "data not deleted";
}


?>