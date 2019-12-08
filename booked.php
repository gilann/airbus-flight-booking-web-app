

<?php
$name = $_POST["name"];

$mail = $_POST["mail"];

$phone = $_POST["phone"];


$flight = $_POST["flight"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airbus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
		
$sql = "insert into bookings(fnumber, name, mail, phone) 
VALUES ('$flight', '$name', '$mail', '$phone')";

if ($conn->query($sql)) {
    header("Location:main.php");
}
?>