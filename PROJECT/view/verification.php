<?php
$error="";

    $stts="";
    $st="";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $id=$_POST["id"];

      if(empty($id)||!isset($_POST["status"]))
      
      
      {
        $stts="You must fill everything";
      }
      

      else{
        $vr= $_POST["status"];

        $servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}


$sql="UPDATE teacher SET tstatus ='$vr' WHERE ID = '$id'";

$res= $conn->query($sql);
if($res)
{
    $st="Successfully Updated";
}
else
{
    echo"error".$conn->error;
}
$conn->close();

$stts="";
}
}

?>