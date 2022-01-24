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

<body>


<table>
<tr>
<td width = "150"></td>
<td width = "30px"><a href="login.php"><img src="../resources/teacher.png" width="300" height="300"></td></a>
<td width = "30px">

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
$userQuery=$connection->getTeacher($conobj,"teacher",$teacher);
echo "<fieldset><Legend>Hello $teacher </Legend><br>
Here is your information: <br>";


if ($userQuery->num_rows > 0){
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
     echo "<br> ID: ". $row["ID"]. " <br> Name: ". $row["tname"]. " <br> Email: ". $row["temail"]. " <br> Address: ". $row["taddress"]. " <br> 
     Phone No: ". $row["tphone"]. " </fieldset>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>
</td>
<td width = "30px"></td></tr>


<tr>
<th></th>
<th></th>


<th> 
<?php
$error="";
$teacher = $_SESSION["username"];
    $validatenotice="";
    $validatetitle="";
    $posted="";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $notice=$_POST["notice"];
      $title= $_POST["noticetitle"];

      if(empty($notice)||empty($title))
      
      
      {
        $validatenotice="Please fill all the forms";
      }
      

      else{

        $servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}
$sql="INSERT INTO notice(tnotice, tnoticetitle, tuname) values('$notice','$title','$teacher') ";
$res= $conn->query($sql);
if($res)
{
  $posted="Notice posted";
}
else
{
    echo"error".$conn->error;
}
$conn->close();
$validatenotice="";
    $validatetitle="";
    
}
    }


?>
<fieldset>
<Legend><?php echo "Notice Section:"?></Legend>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
<br><br>
<input type="text" name="noticetitle" placeholder = "Enter notice title">
<br> <br>
<textarea name ="notice" rows="4" cols="50">post any notice </textarea>
<br> <br>
<input type="submit" value="Post">
<br> <br>
<?php echo "$posted"; ?>
<?php echo  $validatenotice ;?>
<br><br>

<a href="../view/noticepage.php">Notices</a></td>
</th>
</tr>
</fieldset>
</table>
<br> <br>
<center> <a href="../control/logout.php">logout</a></center>

<br>
</body>
</html>
<center><a href="/PROJECT/view/taccountdelete.php">Delete your Account</a></center>


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
