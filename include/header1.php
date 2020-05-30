<?php
session_start();
function userid()
{isset['user']
  if()
  return "Login";
}
$name="DEEPAK";
echo("<div id=\"header\">
  <div id=\"logo-container\">
    <img id=\"logo\" src=\"./LOGO.png\"></img>
  </div>
  <nav>
  <ul id=\"menubar\">
    <li class=\"box\"><a class=\"menu\" href=\"./index.php\">Home</a></li>
    <li class=\"box\"><a class=\"menu\" href=\"./contact.php\">Contact</a></li>
    <li class=\"box\"><a class=\"menu\" href=\"./about.php\">About</a></li>
    <li class=\"box\"><a class=\"menu\" href=\"./services.php\">Services</a></li>
    <li class=\"box\"><a class=\"menu\" href=\"./support.php\">Support</a></li>
  </ul>
  </nav>
  <div id=\"login\">
    <button id=\"loginbutton\" onclick=\"window.location.href='./login.php';\">".userid()."</button>
  </div>
</div>");
?>
