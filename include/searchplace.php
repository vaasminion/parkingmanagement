<?php
if(!isset($_SESSION['username']))
    {
        session_start();
    }
if(isset($_POST['search']))
{
  if(isset($_SESSION['username']))
  {
    header('location: \dashboard\bookslot.php');
  }
  else
  {
        header('location: ..\login.php');
    }
}

 ?>
