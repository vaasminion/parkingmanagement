<?php
require_once './conn.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$password = $_POST['password'];
$sql = "INSERT INTO user_table(username,password,email,firstn,lastn,city,phone) value('$username','$password','$email','$firstname','$lastname','$city','$phone')";
/*if($conn->query($sql) === true){
  echo"connected";
}
  else{
  	echo " error" .$sql.$conn->error;
  }*/
  if($connect->query($sql)==TRUE)
  {
      header('location: ..\login.php');
  }
  else{
    header('location: ..\registration.php');

  }
?>
