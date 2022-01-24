<?php
$error="";

    $isinserted="";
    $validatename="";
    $validateusername="";
    $validatepassword="";
    $validateemail="";
    $validategender="";
    $validateaddress="";
    $validatephone="";
    $validatedate="";
    $gn="";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $name=$_POST["name"];
      $uname=$_POST["username"];
      $email=$_POST["email"];
      $pass=$_POST["password"];
      $phone=$_POST["phone"];
      $address=$_POST["address"];
      $date=$_POST["date"];
      $conpassword=$_POST["conpassword"];

      if(empty($date)||empty($phone)|| strlen($phone)<11||empty($address)||empty($name) || strlen($name)<3|| empty($uname) || strlen($uname)<3||
      empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)||
      empty($pass) || empty($conpassword) || $pass!==$conpassword || strlen($pass) < 6||!isset($_POST["gender"]))
      
      
      {
        $validatedate="You must enter date of birth";
        $validatephone="You must enter mobile number";
        $validateaddress="You must enter address";
        $validatename="You must enter valid name";
        $validateusername="You must enter valid username";
        $validateemail="You must enter valid email";
        $validatepassword="You must enter valid password";
        $validategender="You must select gender";
      }
      

      else{
        $gn= $_POST["gender"];

        $servername="localhost";
$username="root";
$password="";
$dbname="projectdb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("Connection failed:".$conn->connect_error);}
$sql="INSERT INTO teacher(tuname,tname,temail,tpass,tgender, tphone, taddress, tdob) values('$uname','$name', '$email', '$pass', '$gn', '$phone', '$address', '$date')";
$res= $conn->query($sql);
if($res)
{
  $isinserted="new record insered";
}
else
{
    echo"error".$conn->error;
}
$conn->close();

    $validatename="";
    $validateusername="";
    $validatepassword="";
    $validateemail="";
    $validategender="";
    $validateaddress="";
    $validatephone="";
    $validatedate="";
}
}

?>