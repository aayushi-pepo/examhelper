<?php
$servername = "localhost";
$Stream = "Stream";
$year = "year";
$University "University";
$Email = "Email";
$password = "password";

// Create connection
$conn = new mysqli($servername, $Stream, $year,$University,$Email ,$password);
$sql = "INSERT INTO `Login`(`Stream`, `Year`, `University`, `Email`, `password`) VALUES (\'Computer\',\'First\',\'Mumbai\',\'kunal@shm\',\'password\');";

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
