<?php

$host = 'localhost';
$username = 'root';
$password = '';
$databasename = "loginsystem";
$tablename = "userdetails";

$conn = new mysqli($host, $username, $password, $databasename);

if($conn->connect_error){
	die("Connection failed" . $conn->connect_error);
}
?>

