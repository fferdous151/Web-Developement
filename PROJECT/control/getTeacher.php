<?php
include('../model/db.php');

$user = $_POST['uname'];
$status="";

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetTeacherByID($conobj,"teacher",$user );



if ($MyQuery->num_rows > 0) {
    //echo "<table><tr><th>username</th><th>Name</th><th>email</th><th>address</th></tr>";

    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {

      if(empty($row['tstatus']) || $row['tstatus']=="Not verified")
      {
        $status= "Not verified!";
      }
      else
      {
        $status= "Verified!";
      }

      echo "<br><fieldset><Legend>Details</Legend> Userame: ". $row["tuname"]. "<br> Name: ". $row["tname"]." <br> Email: ". $row["temail"]. " <br> Address: ". $row["taddress"]. "<br> Cell no: ". $row["tphone"]. "<br>Status: $status" ;
    }
    echo "</table>";
  } else {
    echo "No results";
  }
}
else{
  echo "please enter something";
}
//echo "$status";
