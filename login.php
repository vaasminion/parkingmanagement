<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parking</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/login/login.css">
    <script type="text/javascript" src="./js/login_validate.js"></script>
</head>
<body>
<?php include("include/header.php")?>
<div id="formbox">
    <form name="loginbox" id="loginbox" method="post" action="include/loginform.php" onsubmit="return validate();">
        <h1 id="loginhere">Login Here</h1>
        <h5>Welcome Back !</h5>
        <div id="login_input">
        <input type="text" id="username" class='valid' placeholder="Username or Email ID" name="user">
        <br>
        <input type="password" id="password" class='valid' placeholder="Password" name="password">
            <p id="passworderror"></p>
        </div>
        <p id="loginerror"></p><br>
        <div id="login-button">
        <input class="button" type="submit" name="">
        <input class="button" type="reset" >
        <p id="loginerror"></p>

        </div>
        <hr>
        <div id="create_account">
        <h4 id="newaccountheader">Need An Account?</h4>
        <input class="button" type="button" onclick="location.href='./registration.php'" id="create_button" value="Create New Account">
        </div>
    </form>

</div>
</body>
</html>
