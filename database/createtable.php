<?php
	include('connection.php');

	$sql = "CREATE TABLE IF NOT EXISTS $tablename(
		id INT(15) PRIMARY KEY AUTO_INCREMENT,
		fullname VARCHAR(200),
		email VARCHAR(200)
		)";

	if($conn->query($sql)==true){
		echo "Table created successfully. <br/>";
	}else{
		echo "Error creating table <br/>". $conn->error;
	}

?>