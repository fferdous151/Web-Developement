<?php
include('../control/tdelete.php');
?>
<!DOCTYPE html>
<html>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
<?php

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

$sql = "SELECT ID, tname, temail FROM teacher";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "<br> ID: ".$row["ID"]." <br> Name: ". $row["tname"]. " <br> Email: ". $row["temail"]. " <br>";
    }
} else {
    echo "0 results";
}

//$connection->CloseCon($conobj);
$conn->close();
?>
<br>
<fieldset><Legend>Deletion process:</Legend>
<br><br>
<input type = "text" name ="delete" placeholder = "Enter teacher id">
<br><br>
<input type = "submit" value = "Delete">

<br>
<br>
<?php
echo $error1;
echo $validatedelete
?>


</form>
</body>
</html>