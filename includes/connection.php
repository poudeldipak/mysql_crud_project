<?php

$host = 'localhost';
$username = 'root';
$password = '';
$databasename = "loginsystem";

$conn = new mysqli($host, $username, $password, $databasename);

if($conn->connect_error){
	die("connection failed" . $conn->connect_error);
}
?>

