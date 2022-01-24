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
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;
    var conpassword = document.getElementById("conpassword").value;
    
   

   

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
  }