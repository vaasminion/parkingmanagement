
<!DOCTYPE html>
<html>
<head>
    <title>Parking</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/registration/registration.css">
    <script type="text/javascript">
    function validate()
    {
    var username = document.userdetail.username.value;
    var password = document.userdetail.password.value;
    var firstname = document.userdetail.firstname.value;
    var lastname = document.userdetail.lastname.value;
    var email = document.userdetail.email.value;
    var phone = document.userdetail.phone.value;
    var rpassword = document.userdetail.rpassword.value;
    var city = document.userdetail.city.value;
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
    else if (firstname==null || firstname=="")
    {
      alert("First Name can't be blank");
      return false;
    }
    else if (lastname =null ||lastname =="")
    {
      alert("Last Name can't be blank");
      return false;
    }
    else if (email ==null || email =="")
    {
      alert("Email can't be blank");
      return false;
    }
    else if (phone ==null || phone =="")
    {
      alert("Phone can't be blank");
      return false;
    }
    else if (city ==null || city =="")
    {
      alert("City can't be blank");
      return false;
    }
    else if (rpassword==null || rpassword=="")
    {
      alert("Repeat Password can't be blank");
      return false;
    }
}
</script>
</head>
<body>
<?php include("include/header.php")?>
<div id = "formbox">
    <form name='userdetail' id="userdetail" method="post" action="./include/reg.php" onsubmit="return validate();">
        <h1 id='registrationhere'>Create An Account</h1>
        <div id="name">
            <div class="bind"><label >  First Name:</label><input type="text" value="" name="firstname"></div>
            <div class="bind"><label >  Last Name:</label><input type="text" id="LastName" value="" name="lastname"></div>
        </div>
        <div id="email_username">
            <div class="bind"><label >Email Id:</label><input type="Email" id="Email" name="email" placeholder="abc@xyz.com" value="" ></div>
            <div class="bind"><label>User Name:</label><input type="text" id="UserName" name="username"value=""></div>
        </div>
        <div id="city_phone">
            <div class="bind"><label>City:</label><input type="text" id="city" name="city" value=""></div>
            <div class="bind"><label >Phone No:</label><input type="text" name="phone" id="Phoneno"maxlength="10" value=""></div>
        </div>
        <div id="passwordlabel">
            <div class="bind"><label >Password</label><input type="password" id="password" name="password" value=""></div>
            <div class="bind"><label >Repeat Password</label><input type="password" id="repeatpassword" name="rpassword" value=""></div>
        </div>
        <button type="submit" id="create" onclick="validate()">Create</button>
    </form>


</div>
<footer>
    <p>Posted by: Parking Space</p>
</footer>

</body>
