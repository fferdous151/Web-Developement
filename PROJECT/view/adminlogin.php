<?php
include('../control/adminlogincheck.php');

if(isset($_SESSION['username'])){
header("location: ../view/adminprofile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
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
top: 90px;
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
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var error_messege = document.getElementById("error_messege");
  var text;

  if(username == "" || password == ""){
    text = "Please fill all the field";
    error_messege.innerHTML = text;
    return false;
  }
  return true;

}

</script>

</head>
<body>
<a href="homepage.php"><img src= "../resources/icon.jpg"></a>


<div class="topnav">
  
  
<a href="../view/decision.php"><input type="submit" value="Login/Registration"></a>
  
  <a href="#">Technical</a>
  <a href="#">Madrasah</a>
  <a href="#">General</a>
  <a href="#">Content</a>
  <a><input type="text" value="Search"></a>
  
</div>

<div class="row">


  <div class="column left" style="background-color:white:#4D1A7F">
<img src="../resources/admin.png">
  </div>
  



<div class="row">
<div class="column right" style="background-color:#4D1A7F;">
<form action="" onsubmit="return validation()" method="post">
<fieldset>
<table style= "width:100%">
<tr>
<Legend>Admin Login</Legend>
</tr>
<tr><th>
    <input type="text" id= "username" name="username" placeholder="Enter your Username" ></tr></th>
    <tr><th>
    <input type="password" id= "password" name="password" placeholder="Enter your password" ></tr></th>

    <tr><th><input name="submit" type="submit" value="LOGIN"></tr></th>
    <tr><th><div id="error_messege"></div></th></tr>
    <tr><th><?php echo $error; ?></tr></th>
    <tr><th>Or Register as a new Admin?</tr></th>
    <tr><th><a href="../view/adminregister.php">Register Here</tr></th>
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