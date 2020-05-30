<?php
require_once "conn.php";
$user = $_POST['user'];
$pass = $_POST['password'];
$sql = "SELECT * FROM user_table
        WHERE username = '$user' AND password = '$pass' LIMIT 1";
$result = $connect->query($sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_array($result))
  {
    session_start();
    $_SESSION['username'] = $row['username'];
    header('location: ../dashboard.php');
  }
}
else {
  echo '<script type="text/javascript">';
echo ' alert("JavaScript Alert Box by PHP")';
echo '</script>';
  header('location: ..\login.php');
}
?>
