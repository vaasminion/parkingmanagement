function validate()
    {
    var username = document.userdetail.username;
    var password = document.userdetail.password;
    var firstname = document.userdetail.firstname;
    var lastname = document.userdetail.lastname;
    var email = document.userdetail.email;
    var phone = document.userdetail.phone;
    var rpassword = document.userdetail.rpassword;
    var city = document.userdetail.city;
    var count = true;

    if (username.value==null || username.value=="")
    {
      //alert("Username can't be blank");
      username.classList.remove('valid');
      username.classList.add('notvalid');
      count = false;
    }
    if (password.value==null || password.value=="")
    {
      //alert("password can't be blank");
      password.classList.remove('valid');
      password.classList.add('notvalid');
      count = false;
    }
    if (firstname.value == null || firstname.value=="")
    {
      //alert("First Name can't be blank");
      firstname.classList.remove('valid');
      firstname.classList.add('notvalid');
      count = false;
    }
    if (lastname.value == null ||lastname.value =="")
    {
      //alert("Last Name can't be blank");
      lastname.classList.remove('valid');
      lastname.classList.add('notvalid');
      count = false;
    }
    if (email.value ==null || email.value =="")
    {
     // alert("Email can't be blank");
      email.classList.remove('valid');
      email.classList.add('notvalid');
      count = false;
    }
    if (phone.value == null || phone.value =="")
    {
      //alert("Phone can't be blank");
      phone.classList.remove('valid');
      phone.classList.add('notvalid');
      count = false;
    }
    if (city.value ==null || city.value =="")
    {
     // alert("City can't be blank");
     city.classList.remove('valid');
     city.classList.add('notvalid');
     count = false;
    }
    if (rpassword.value == null || rpassword.value =="")
    {
      //alert("Repeat Password can't be blank");
      rpassword.classList.add('notvalid');
      rpassword.classList.remove('valid');
      count = false;
    }
    return count;
}