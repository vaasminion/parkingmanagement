<?php
  function check_availibility()
  {
      require_once "./include/conn.php";
      $name = $_POST['location'];
      $sql = " SELECT * FROM location WHERE name = '$name'";

      if($result=$connect->query($sql)){
        $row = $result->fetch_assoc();
        return $row['available'];
          }
        return 0;
    }
    $server = "127.0.0.1";
    $username = "root";
    $pass = "";
    $db_name = "user";
    $connect = mysqli_connect($server,$username,$pass,$db_name);
    if(isset($_GET['location'])){
    $name = $_GET['location'];
    $sql = " SELECT * FROM location WHERE name = '$name'";
    if($result=$connect->query($sql)){
      $row = $result->fetch_assoc();
      echo("Available Slot in ".ucfirst($name)." is ".$row['available']);
      } 
    }
   
 ?>
