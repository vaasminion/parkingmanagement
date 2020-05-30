<?php
if(!isset($_SESSION['username']))
    {
        session_start();
    }
function userid() {
if(isset($_SESSION['username'])){
  return $_SESSION['username'];
}
else {
  return "Log in";
}
}
if(isset($_POST['login'])){
  if(isset($_SESSION['username'])){
    header('location: .\dashboard.php');
  }
  else{
    header('location: .\login.php');
  }
}
 ?>
<body>
  <div id="header">
    <div id="logo-container">
        <img id="logo" src="./image/LOGO.png"></img>
    </div>
    <nav>
        <ul id="menubar">
            <li id="box"><a class="menu" href="./index.php">Home</a></li>
            <li id="box"><a class="menu" href="./contact.php">Contact</a></li>
            <li id="box"><a class="menu" href="./about.php">About</a></li>
            <li id="box"><a class="menu" href="./support.php">Support</a></li>
        </ul>
    </nav>
    <div id="login">
      <form method="post">
        <button type="submit" id="loginbutton" onclick="window.location.href='./login.php';" name="login"><?php echo(userid()); ?></button>
      </form>
    </div>
</div>
</body>
