<?php
$server = "localhost";
$username = "root";
$pass = "";
$db_name = "user";
$user = $_SESSION['username'];
$connect = mysqli_connect($server,$username,$pass,$db_name);
$i = 1;
// Check connection
if ($connect->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bookslot WHERE username ='$user' ";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $i++ . "</td><td>" . $row["location"] . "</td><td>"
. $row["carno"]. "</td><td>".$row['time']. "</td><td>" . $row['booking_time'] . "</td></tr>"; }
echo "</table>";
} else { echo "0 results"; }
$connect->close();
?>
