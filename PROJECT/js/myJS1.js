function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username == "") {
    document.getElementById("mytext").innerHTML="Please enter username";
    return false;
  }

  if (password == "") {
    document.getElementById("mytext").innerHTML="Please enter password";
    return false;
  }
 
}


function validateRegister() {
  var name = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  var conpassword = document.getElementById("conpassword").value;
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var username = document.getElementById("username").value;
  var phone = document.getElementById("phone").value;
  var address = document.getElementById("address").value;
  var date = document.getElementById("date").value;


  if (name == ""|| name.length<3) {
    document.getElementById("mytext").innerHTML="Please enter your name";
    return false;
  }

  if (username == "") {
      document.getElementById("mytext").innerHTML="Please enter username";
      return false;
  }

  if (password == ""|| password.length<6) {
    document.getElementById("mytext").innerHTML="Please enter password";
    return false;
  }

  if (email == "") {
      document.getElementById("mytext").innerHTML="Please enter email";
      return false;
  }

  if (phone == ""|| phone.length<11) {
      document.getElementById("mytext").innerHTML="Please enter cell no";
      return false;
  }

  if (address == "") {
      document.getElementById("mytext").innerHTML="Please enter your address";
      return false;
  }

  if (date == "") {
      document.getElementById("mytext").innerHTML="Please enter your DOB";
      return false;
  }
 

  if (document.getElementById("male").checked == false &&  document.getElementById("female").checked == false  &&  document.getElementById("other").checked == false)
  {
    document.getElementById("mytext").innerHTML="Please select any radio button";
    return false;
  }
}