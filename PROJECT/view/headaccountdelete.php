<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../view/homepage.php"); // Redirecting To Home Page
}

$error1="";
$uname=$_SESSION["username"];

$servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}
$sql="DELETE FROM headteacher WHERE huname='$uname'";
$res= $conn->query($sql);
if($res===TRUE)
{
    $error1="Teacher deleted!";
}
else
{
    echo"error".$conn->error;
}
$conn->close();

$validatedelete="";  
header("Location: ../control/logout.php");

?>