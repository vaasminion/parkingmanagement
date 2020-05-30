<?php
if(!isset($_SESSION['username']))
    {
        session_start();
    } ?>
<?php
function booking() {
  if(check_availibility()){
    $server = "localhost";
    $username = "root";
    $pass = "";
    $db_name = "user";
    $connect = mysqli_connect($server,$username,$pass,$db_name);
    $username = $_SESSION['username'];
    $location = $_POST['location'];
    $carno = $_POST['carno'];
    $time = $_POST['time'];
    $sql = "INSERT INTO bookslot(username,location,carno,time) values('$username','$location','$carno','$time')";
    if($connect->query($sql))
    {
      $sql = " UPDATE location SET available = available - 1 WHERE name = '$location'";
      if($connect->query($sql)) echo"Slot successfully Booked";
    }
    }
  else echo "Space Not Available";  
}
?>
