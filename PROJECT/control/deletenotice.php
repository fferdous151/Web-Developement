<?php
$error="";

$validatedelete=""; 
 
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $delete=$_POST["dlt"];

      if(empty($delete))
      
      
      {
        $validatedelete="You must enter notice title";
      }
      

      else{

        $servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}
$sql="DELETE FROM notice WHERE tnoticetitle='$delete'";
$res= $conn->query($sql);
if($res===TRUE)
{
    $error="Notice deleted!";
}
else
{
    echo"error".$conn->error;
}
$conn->close();

$validatedelete="";
}
}

?>