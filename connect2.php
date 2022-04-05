<?php
$Stream = filter_input(INPUT_POST, 'Stream');
$year = filter_input(INPUT_POST, 'year');
$University = filter_input(INPUT_POST, 'University');
$Email = filter_input(INPUT_POST, 'Email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($Stream)){
if (!empty($year)){
if (!empty($Universityiv)){
if (!empty($Email)){
if (!empty($password)){


  $servername = "localhost";
  $Stream = "Stream";
  $year = "year";
  $University "University";
  $Email = "Email";
  $password = "password";// Create connection
  conn = new mysqli($servername, $Stream, $year,$University,$Email ,$password);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (Stream, year, University,Email, password)
values ('$Stream','$year', '$University', '$Email','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
else{
echo "Email should not be empty";
die();
}
else{
echo "University should not be empty";
die();
}
else{
echo "year should not be empty";
die();
}
}
else{
echo "Stream should not be empty";
die();
}
?>
