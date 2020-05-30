<?php
function check_availibility()
{
    require_once "./include/conn.php";
    $name = $_POST['location'];
    $sql = " SELECT * FROM location WHERE name = '$name'";
    $result = $connect->query($sql);
    if($result){
      $row = $result->fetch_assoc();
      return $row['available'];
        }
      return 0;
  }
 ?>
