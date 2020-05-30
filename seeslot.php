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
   <div id="seeslot">
     <div id="table">
       <table align="center">
         <tr><h2>Booking History</h2></tr>
         <tr>
           <th>Id</th>
           <th>Location</th>
           <th>Car no</th>
           <th>Slot Timing</th>
           <th>Booked on</th>
         </tr>
        <?php include("./table.php"); ?>
       </table>

     </div>

   </div>
 </div>
</div>
</body>
</html>
