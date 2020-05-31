
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
    <div id="myaccount">
      <h1>WELCOME BACK</h1>
      <img id="profile" src="./image/profile.svg">
      <p id="profilename"><?php echo($_SESSION['username'])?></p>
    </div>
  </div>
 </div>
</body>
</html>
