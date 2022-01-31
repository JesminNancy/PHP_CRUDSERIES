<?php

$dbhost = 'localhost';
$dbuser = 'root';
$password = "";
$dbname = 'crudseries';

$con = mysqli_connect($dbhost,$dbuser,$password,$dbname);

if(!$con){
  die(mysqli_error("Error"+$con));
}

?>