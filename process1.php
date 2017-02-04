<?php
$servername = "localhost";
$username = "root";
$password = "database";
$dbname = "community_services";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name']; 
$user_name = $_POST['user_name'];
$password = $_POST['password'];

$first_name = stripcslashes($first_name);
$last_name = stripcslashes($last_name); 
$user_name = stripcslashes($user_name);
$password = stripcslashes($password);

$first_name = mysql_real_escape_string($first_name);
$last_name = mysql_real_escape_string($last_name);
$user_name =mysql_real_escape_string($user_name);
$password =mysql_real_escape_string($password);

mysql_connect("localhost", "root", "database");
mysql_select_db("community_services");

$query = "INSERT INTO `community_services`.`register` (`fname`, `lname`, `uname`, `psw`) VALUES ('first_name', '$last_name', '$user_name', '$password');";
mysql_query($query);
if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
echo "done";



?>