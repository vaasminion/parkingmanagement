function validate()
    {
    var username = document.loginbox.user;
    var password = document.loginbox.password;
    
    var count = true;
    
    if (username.value == null || username.value =="")
    {
      username.classList.remove('valid');
      username.classList.add('notvalid');
      //alert("Username can't be blank");
      count = false;
    }
    if (password.value == null || password.value =="")
    {
      //alert("password can't be blank");
      password.classList.remove('valid');
      password.classList.add('notvalid');
      count = false;
    }
    if(count == false){
      document.getElementById("loginerror").innerHTML = "Enter Valid Information";
    }
    else{
      
    }
    return count;
    }
