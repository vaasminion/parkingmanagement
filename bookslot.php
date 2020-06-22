<?php include("./include/check_available.php");
include("./include/booking.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parking</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/login/login.css">
    <link rel="stylesheet" type="text/css"  href="./css/dashboard/dash.css">
</head>
<body>
  <?php include('./include/header.php');?>
<div id="dashboardbox">
  <div id="dashboard">
   <h1 id="dashboardhead">Dashboard</h1>
   <nav id="dnavbox">
   <ul id="dashboardnav">
     <li><a href="./dashboard.php">My Account</a></li>
     <li><a href="./bookslot.php">Book Slot</a></li>
     <li><a href="./seeslot.php">See Slot</li>
     <li><a href="./logout.php">Log out</a></li>
   </ul>
   </nav>
   <div id="bookslot">
     <form id="slot" method="POST">
       <div id="checka">
         <label>Choose Location: </label><select id="location" name="location" >
           <option value="delhi">Delhi</option>
           <option value="ghaziabad">Ghaziabad</option>
           <option value="noida" >Noida</option>
         </select>
         <button type="button" name="check" class="bbutton" onclick="avai()">Check Availibilty</button>
         <script>
            function avai(){
              str = document.getElementById('location').value;
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("output").innerHTML = this.responseText;
                }
              };
        xhttp.open("GET", "./include/check_available.php?location="+str, true);
  xhttp.send();
            }
         </script>
         <h3 id="output"></h3>
       </div>
       <div id="booking">
         <label for="carno">Enter Car no :</label><input type="text" name="carno" value="" class="in"><br>
         <label>Select Time</label><input type="time" name="time" value="" class="in">
         <button type="submit" name="book" class="bbutton">BOOK</button>
         <p><?php if(isset($_POST['book'])) echo(booking()); ?></p>
       </div>
     </form>

   </div>
 </div>
</div>
</body>
</html>
