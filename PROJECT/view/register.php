<?php 
include('../control/registrationcheck.php');
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
top: 50px;
left: 340px;

  width: 5%;
}


.right {
    color: #f2f2f2;
position: relative;
top: 14px;
left: 552px;
height: 40%;
  width: 20%;
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
<script src="../js/myjs1.js"></script>
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
<img src="../resources/teacher.png"width="300" height="300">
  </div>

  <div class="row">
  <div class="column right" style="background-color:#4D1A7F;">


<form action="" onsubmit="return validateRegister()" method="POST">

<fieldset>
<table style= "width:100%">


<tr>
<legend>Register Here</legend>
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
<th><input type="radio" id="male" name="gender" value="male">Male </th>
</tr>

<tr>
<th><input type="radio" id="female" name="gender" value="female">Female </th>
</tr>

<tr>
<th><input type="radio" id="other" name="gender" value="other">Other </th>
</tr>


<tr>
<th><input type="text" id="phone" name="phone" placeHolder="Mobile no. must be 11 digits"></th>
</tr>

<tr>
<th><input type="text" id="address" name="address" placeHolder="Enter address"></th>
</tr>

<tr>
<th><input type="date" id="date" name="date"></th>
</tr>

<tr>
<th><input type="submit" type="submit" value="register"></th>
</tr>
<tr><th><a id="mytext"></tr></th>

<tr><th><?php echo  $isinserted ;?></th></tr>

<tr><th><?php echo  $validatename ;?></th></tr>
<tr><th><?php echo  $validateusername ;?></th></tr>
<tr><th><?php echo  $validateemail ;?></th></tr>
<tr><th><?php echo  $validatepassword ;?></th></tr>
<tr><th><?php echo  $validategender ;?></th></tr>
<tr><th><?php echo  $validatephone ;?></th></tr>
<tr><th><?php echo  $validateaddress ;?></th></tr>
<tr><th><?php echo  $validatedate ;?></th></tr>


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

