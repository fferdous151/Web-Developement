<?php
include('../view/verification.php');
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
    echo "No results";
}

echo "<br>";
$conn->close();
?>

<fieldset><Legend>Verification process:</Legend>
<br><br>

<input type = "text" id = "id" name="id" placeholder = "Enter teacher id">
<br>
<input type = "radio" id="Verified" name="status" value="Verified">Verified
<br>
<input type = "radio" id="" name="status" value="Not verified">Not verified
<br><br>
<input type ="submit" value="Update status">
<br><br>
<?php echo $st; ?>
<?php echo $stts; ?>
</fieldset>

<?php

?>
</form>
</body>
</html>