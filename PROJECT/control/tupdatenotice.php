<?php
$error="";

    $validateupdatednotice=""; 
    $validateprevious=""; 
    $validatenew=""; 
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $previous=$_POST["previous"];
      $new=$_POST["new"];
      $updatednotice=$_POST["updatednotice"];

      if(empty($updatednotice)||empty($previous)||empty($new))
      
      
      {
        $validateprevious="You must enter notice title";
        $validatenew="You must Enter new title";
        $validateupdatednotice="You must Enter new notice";
      }
      

      else{

        $servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}
$sql="UPDATE notice SET tnotice='$updatednotice', tnoticetitle='$new' WHERE tnoticetitle='$previous'";
$res= $conn->query($sql);
if($res===TRUE)
{
    $error="Notice updated!";
}
else
{
    echo"error".$conn->error;
}
$conn->close();

$validateupdatednotice=""; 
$validateprevious=""; 
$validatenew=""; 
}
}

?>