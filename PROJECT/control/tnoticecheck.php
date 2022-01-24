<?php
$error="";

    $validatenotice="";
    $validatetitle="";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $notice=$_POST["notice"];
      $title= $_POST["noticetitle"];

      if(empty($notice)||empty($title))
      
      
      {
        $validatenotice="Please fill all the forms";
        $validatetitle="Please fill all the forms";
      }
      

      else{

        $servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}
$sql="INSERT INTO teacher(tnotice, tnoticetitle) where tuname= '$teacher' values('$notice','$title') ";
$res= $conn->query($sql);
if($res)
{
    echo"Notice posted";
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