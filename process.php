<?php
 
$user_name = $_POST['user_name'];
$password = $_POST['password'];

$user_name = stripcslashes($user_name);
$password = stripcslashes($password);
$user_name =mysql_real_escape_string($user_name);
$password =mysql_real_escape_string($password);

mysql_connect("localhost", "root", "");
mysql_select_db("community_service");

$result = mysql_query("select * from register where uname = '$user_name' and psw = '$password'") or die("Failed to query database ".mysql_error());
$row = mysql_fetch_array($result);
if ($row['uname'] == $user_name && $row['psw'] == $password ){
	echo "Login success Welcome";
}else{
	echo "Login failed";
}

?>