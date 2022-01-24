<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<body>

<head>

<style>
* {
  box-sizing: border-box;
}

</style>   
<link rel="stylesheet" type="text/css" href="../css/mycss.css"> 

<script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/PROJECT/control/getTeacher.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);
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
<br>

<table>
<tr>
<td width = "300px"></td>
<td width = "30px"><img src="../resources/head.png" width="300" height="300"></td></a>
<td width = "20px">

<?php
include('../model/db.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$headteacher = $_SESSION["username"];

$connection = new db();
$conobj=$connection->OpenCon();


$userQuery=$connection->getHead($conobj,"headteacher",$headteacher);

echo "<fieldset><Legend> Hello Head Teacher </Legend><br>";
echo " Here is your information: <br>";


if ($userQuery->num_rows > 0){
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
     echo "<br> Name: ". $row["hname"]. " <br> Email: ". $row["hemail"]. " <br>";
    }
} else {
    echo "No results";
}
$conn->close();

echo"<br>";
echo"<br>";
?>
</td>
</tr>

<tr>
<th></th>

<th>
<fieldset><Legend>List of teachers</Legend>
<?php include('../control/teachercheck.php');?></th></fieldset>


<th>
<p id="mytext"></p>
<br><br>
<fieldset><Legend>Find detail of teacher</Legend><br>

  <input type="text" id="uname" placeholder="Enter teacher ID"><br><br>
  <button onclick="showmyuser()">Search</button><br>

</fieldset>
</th>
</tr>

</table>
<br>
<br>

<center><a href="/PROJECT/view/headaccountdelete.php">Delete your Account</a></center>
<br>
<center><a href="../control/logout.php">logout</a></center>

<br><br>



</body>
</html>

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

<?php
$cookie_name= $_SESSION["username"];
$cookie_value= $_SESSION["username"];
setcookie($cookie_name, $cookie_value, time() + (86400*30), "/");
?>



</form>
</body>
</html>

