<?php 
include('../control/tupdatenotice.php');
include('../control/deletenotice.php');
?>

<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../view/homepage.php"); // Redirecting To Home Page
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
top: 30px;
left: 100px;

  width: 20%;
  color: white;
}


.right {
    color: #f2f2f2;
position: relative;

left: 650px;
top: -300px;
 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>   
<link rel="stylesheet" type="text/css" href="../css/mycss.css"> 
</head>

<a href="homepage.php"><img src= "../resources/icon.jpg"></a>

<div class="topnav">
  
  
  <a><input type="submit" value="Login/Registration"></a>
  
  <a href="#">Technical</a>
  <a href="#">Madrasah</a>
  <a href="#">General</a>
  <a href="#">Content</a>
  <a><input type="text" value="Search"></a>
  
</div>

<h1><center><fieldset>Notice Page</fieldset></center> </h1>

<body>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>"method="POST">


<table>
<tr>
<td width = "250px"></td>
<td width = "400px"> 
<fieldset>
<Legend>Notices:</Legend>
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
$teacher = $_SESSION["username"];
$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->getNotice($conobj,"notice",$teacher);


if ($userQuery->num_rows > 0){
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
     echo "<br> Notice title: ". $row["tnoticetitle"]. " <br> Notice: ". $row["tnotice"]. "<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</td>




<td width = "50px"> <fieldset><Legend>Update Notice</Legend>
<br>
<input type = "text" id ="previous" name = "previous" placeholder = "Enter notice title"><br><br>
<input type = "text" id = "new" name = "new" placeholder = "Enter new title"><br><br>
<textarea name = "updatednotice" rows="4" cols="50">Enter new notice</textarea><br><br>
<input type = "submit" name = "Update" value = "Update"> <br><br>
<?php 
      echo "$validateupdatednotice<br>"; 
      echo "$validateprevious<br>"; 
      echo "$validatenew<br>";
?>
</td>
</fieldset>
</tr>
</table>



<br><br>



<fieldset><center>Delete Notice</center>
<br>
<center><input type = "text" name = "dlt" placeholder = "Enter notice title"><br><br></center>
<center><input type = "submit" name = "Delete" value = "Delete"></center><br>
<?php echo "<center>$validatedelete</center><br>"; 
      echo "$error<br>"; 
?></fieldset>
<br><br>

    

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
</form>
</body>
</html>
