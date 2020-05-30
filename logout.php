 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Parking</title>
     <link rel="stylesheet" type="text/css" href="./css/style.css">
     <!--<link rel="stylesheet" type="text/css" href="./css/login/login.css">-->
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
    <div id="logoutbox">
      <?php
      if(isset($_POST['logout'])){
        header('location: .\index.php');
        session_unset();
        session_destroy();
      }
       ?>
      <h1>Log Out</h1>
      <form id="logout" method="post">
        <button id="logoutbutton" type="submit" name="logout">Logout</button>
      </form>

    </div>
  </div>
 </div>
</body>
</html>
