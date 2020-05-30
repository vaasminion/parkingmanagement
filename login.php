<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parking</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/login/login.css">
    <script type="text/javascript">
    function validate()
    {
    var username = document.loginbox.user.value;
    var password = document.loginbox.password.value;

    if (username==null || username=="")
    {
      alert("Username can't be blank");
      return false;
    }
    else if (password==null || password=="")
    {
      alert("password can't be blank");
      return false;
    }
    }
</script>
</head>
<body>
<?php include("include/header.php")?>
<div id="formbox">
    <form name="loginbox" id="loginbox" method="post" action="include/loginform.php" onsubmit="return validate();">
        <h1 id="loginhere">Login Here</h1>
        <h5>Welcome Back !</h5>
        <div id="login_input">
        <input type="text" id="username" placeholder="Username or Email ID" name="user">
         <p id="loginerror"></p><br>
        <input type="password" id="password" placeholder="Password" name="password">
            <p id="passworderror"></p>
        </div>
        <div id="login-button">
        <input id="button" type="submit" name="">
        <input id="button" type="reset" >
        </div>
        <hr>
        <div id="create_account">
        <h4 id="newaccountheader">Need An Account?</h4>
        <input id="button" type="button" onclick="location.href='./registration.php'" id="create_button" value="Create New Account">
        </div>
    </form>

</div>
<footer>
    <p>Posted by: Parking Space</p>
</footer>
</body>
</html>
