
<?php
$error1="";

    $validatedelete="";  
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $delete=$_POST["delete"];

      if(empty($delete))
      
      
      {
        $validatedelete="You must enter teacher ID";
      }
      

      else{

        $servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}
$sql="DELETE FROM teacher WHERE ID='$delete'";
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
}
}

?>