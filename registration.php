
<!DOCTYPE html>
<html>
<head>
    <title>Parking</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/registration/registration.css"> 
    <script type="text/javascript" src="./js/reg_validate.js"></script>
</head>
<body>
<?php include("include/header.php")?>
<div id = "formbox">
    <form name='userdetail' id="userdetail" method="post" action="./include/reg.php" onsubmit="return validate();">
        <h1 id='registrationhere'>Create An Account</h1>
        <div id="name">
            <div class="bind"><label >  First Name:</label><input type="text" class='valid' value="" name="firstname"></div>
            <div class="bind"><label >  Last Name:</label><input type="text" class='valid' id="LastName" value="" name="lastname"></div>
        </div>
        <div id="email_username">
            <div class="bind"><label >Email Id:</label><input type="Email" id="Email" class='valid' name="email" placeholder="abc@xyz.com" value="" ></div>
            <div class="bind"><label>User Name:</label><input type="text" id="UserName" class='valid' name="username"value=""></div>
        </div>
        <div id="city_phone">
            <div class="bind"><label>City:</label><input type="text" id="city" class='valid' name="city" value=""></div>
            <div class="bind"><label >Phone No:</label><input type="text" class='valid' name="phone" id="Phoneno"maxlength="10" value=""></div>
        </div>
        <div id="passwordlabel">
            <div class="bind"><label >Password</label><input type="password" id="password" class='valid' name="password" value=""></div>
            <div class="bind"><label >Repeat Password</label><input type="password" id="repeatpassword" class='valid' name="rpassword" value=""></div>
        </div>
        <button type="submit" id="create" onclick="validate()">Create</button>
    </form>


</div>

</body>
