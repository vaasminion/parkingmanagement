function validate(){
  var user = $("#username").val();
  var pass = $("#password").val();

  if (username != "" && password != ""){
    $.ajax({
      type: 'post',
      url: '/include/loginform.php',
      data:{
        login: "login",
        username:user,
        password:pass
      },
      success:function(response){
        if (response=="success"){
          window.location.href = "index.php";
        }
        else{
          alert("Wrong Details");
        }
      }
    });
  }
  else{
    alert("Please Fill All the Details");
  }
  return false;
}
