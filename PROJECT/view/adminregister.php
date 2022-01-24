<?php 
include('../control/adminregistrationcheck.php');
 

?>
<!DOCTYPE html>
<html>

<style>
 

 * {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}

.left {
position: relative;
top: 90px;
left: 350px;

  width: 2%;
}


.right {
    color: #f2f2f2;
position: relative;
top: 70px;
left: 550px;
height: 70%;
  width: 30%;
  margin: 20px; 
  box-sizing: border-box;
  border: none;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
#error_messege{
        color: red;
        font-weight: bold;
}
</style>


<link rel="stylesheet" type="text/css" href="../css/mycss.css">

<script>
function validation(){
  
  var name = document.getElementById("name").value;
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var conpassword = document.getElementById("conpassword").value;
  var error_messege = document.getElementById("error_messege");
  var text;

  if(username == "" || name == "" || email == "" || password == "" || conpassword == ""){
    text = "Please fill all the field";
    error_messege.innerHTML = text;
    return false;
  }else {
    if (password.length < 6){
      text = "Password should be atleast 6 characters long!";
      error_messege.innerHTML = text;
      return false;
    }else {
      if (password != conpassword){
        text = "Password and Confirm password mismatch!";
        error_messege.innerHTML = text;
        return false;
      }else {
        if (email.length < 6){
          text = "Please Enter the Valid Email";
          error_messege.innerHTML = text;
          return false;
        }else {
          
          if (name.length < 3){
            text = "Length of name is too short";
            error_messege.innerHTML = text;
            return false;
          }else {
            for(i=0; i<name.length; i++){
              ch = name.charAt(i);
              if(!(ch >= 'a' && ch <= 'z') && !(ch >= 'A' && ch <= 'Z') && !(ch == ' ')){
                text = "Name contain only characters";
                error_messege.innerHTML = text;
                return false;
              }
            }
          }
          alert("Form Submited Sucessfully!")
          return true;
        }
      }
    }
  }
}

</script>
</head>

<a href="homepage.php"><img src= "../resources/icon.jpg"></a>

<div class="topnav">
  
  
<a href="../view/decision.php"><input type="submit" value="Login/Registration"></a>
  <a href="#">Technical</a>
  <a href="#">Madrasah</a>
  <a href="#">General</a>
  <a href="#">Content</a>
  <a><input type="text" value="Search"></a>
</div>
<body>
<div class="row">


  <div class="column left" style="background-color:white:#4D1A7F">
<img src="../resources/admin.png">
  </div>

 
  <div class="row">
<div class="column right" style="background-color:#4D1A7F;">

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" onsubmit="return validation()" method="POST">
<fieldset>
<table style= "width:100%">
<tr>
<Legend>Admin Registration</Legend>
</tr>
 
<tr>
<th><input type="text" id ="name" name="name" placeholder="Enter Name"> </th>
</tr>

<tr>
<th><input type="text" id ="username" name="username" placeholder="Enter User Name"> </th>
</tr>
 

<tr>
<th><input type="text" id ="email" name="email" placeHolder="Enter Email"></th>
</tr>


<tr>
<th><input type="password" id ="password" name="password" placeHolder="Password(Min 6 digits)"></th>
</tr>

<tr>
<th><input type="password" id ="conpassword" name="conpassword" placeHolder="Re enter password "></th>
</tr>


<tr><tr><tr><tr>
<th><input type="submit" value="Register"></th>
</tr>
<tr><th><div id="error_messege"></div></th></tr>
<tr><th><?php echo  $validatename ;?></th></tr>
<tr><th><?php echo  $validateusername ;?></th></tr>
<tr><th><?php echo  $validateemail ;?></th></tr>
<tr><th><?php echo  $validatepassword ;?></th></tr>
<tr><th><?php echo  $isinserted ;?></th></tr>

</table>
</fieldset>
</form>

</div>

</div>
<div class="footer">
<h1><center>About Us</center> </h1>
<table>
<tr>
<td width = "30px">About Sikhok Batayon:</td>
<td width = "30px">Planned & Implemented By:</td>
<td width = "30px">Supervision By:</td>
<td width = "30px">Contacts:</td>
</tr>
<tr>
<td>Sikkhok Batayon is the only online platform in Bangladesh in which teachers can upolad and download their daily lessons easily</td>
<td>Ministry of Education <br>
            Ministry of Primary and Mass Education <br>
            Secondary and Higher Education Department <br>
            & Directorate of Primary Education"</td>
<td>a2i Programme <br> 
            ICT DIvision <br>
            E-14/x,Ict Tower <br>
            Agargaon,Sher-e-Bangla Nagar, Dhaka-120,Bangladesh <br>
            WebSite: a2i.gov.bd</td>
<td>Email : teachersportalcst@gmail.com</td>
</tr>
</table>
<br><br><center>Copyright © 2021 All Rights Reserved <br>
            Government of the People's Republic of Bangladesh</center></br></br>
</div>
</body>
</html>

