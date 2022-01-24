<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: ../view/tprofile.php");
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
top: 70px;
left: 340px;
  width: 2%;
}


.right {
  color: #f2f2f2;
position: relative;
bottom: 265px;
left: 637px;
height: 0%;
  width: 20%;
 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}




</style>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
<script src="../js/myjs1.js"></script>
</head>

<a href="../view/homepage.php"><img src= "../resources/icon.jpg"></a>


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
<div class="column left" style="background-color:none">
<img src="../resources/teacher.png" width="300" height="300">
</div>
</div>
  




<div class="row">
<div class="column right" style="background-color:#4D1A7F">




<form action="" onsubmit="return validateForm()" method="post">
<fieldset>
<table style= "width:100%">
<tr>
<legend>Login Here</legend>
</tr>
<tr><th>
    <input type="text" id="username" name="username" placeholder="Enter your username" ></tr></th>     
    <tr><th>
    <input type="password"  id="password" name="password" placeholder="Enter your password" ></tr></th>

    <tr><th><input name="submit" type="submit" value="LOGIN"></tr></th>
    <tr><th><?php echo $error; ?></tr></th>
    
    <tr><th>Or Register as a new user?</tr></th>
    <tr><th><a id="mytext"></tr></th>
    <tr><th><a href="../view/register.php">Register Here</tr></th>
    
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
            Government of the People's Republic of Bangladesh</center></br>
</div>


</body>

</html>