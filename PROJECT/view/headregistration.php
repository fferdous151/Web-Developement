<?php 
include('../control/headregistrationcheck.php');
 

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
top: 40px;
left: 300px;

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

</style>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
<script src="../js/myjs2.js"></script>
</head>
<a href="../view/homepage.php"><img src= "../resources/icon.jpg"></a>
<div class="topnav">
  
  
<a href="/PROJECT/view/decision.php" ><input type="submit" value="Login/Registration"></a>
  
  <a href="#">Technical</a>
  <a href="#">Madrasah</a>
  <a href="#">General</a>
  <a href="#">Content</a>
  <a><input type="text" value="Search"></a>
  
</div>
<body>
<div class="row">


  <div class="column left" style="background-color:none">
<img src="../resources/head.png"width="300" height="300">
  </div>

  <div class="row">
  <div class="column right" style="background-color:#4D1A7F;">


<form action="<?php echo $_SERVER["PHP_SELF"] ?>" onsubmit="return validateRegister()" method="POST">
<fieldset>
<table style= "width:100%">
<tr>
<legend>Head Teacher Registration</legend>
</tr>
 
<tr>
<th><input type="text" id="name" name="name" placeholder="Enter Name"> </th>
</tr>

<tr>
<th><input type="text"  id="username" name="username" placeholder="Enter User Name"> </th>
</tr>
 

<tr>
<th><input type="text" id="email" name="email" placeHolder="Enter Email"></th>
</tr>


<tr>
<th><input type="password" id="password" name="password" placeHolder="Password(Min 6 digits)"></th>
</tr>

<tr>
<th><input type="password" id="conpassword" name="conpassword" placeHolder="Re enter password "></th>
</tr>


<tr>
<th><input type="submit" type="submit" value="Register"></th>
</tr>
<tr><th><a id="mytext"></tr></th>
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
            Government of the People's Republic of Bangladesh</center></br>
</div>
</body>
</html>

