<?php
  $server = "127.0.0.1";
  $username = "root";
  $pass = "";
  $db_name = "user";
  /*$conn = new mysqli($server , $username ,$pass , $db_name);
  if($conn->connect_error){
    die("connecttion failed".$conn->connect_error);
    echo"F";
  }*/
  $connect = mysqli_connect($server,$username,$pass,$db_name);
  if($connect->connect_error){
    die("connecttion failed".$conn->connect_error);
    echo"F";}

?>
