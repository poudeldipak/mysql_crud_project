<?php
	include('connection.php');

	$email = $_POST['email'];
	$fullname = $_POST['fullname'];

	$insertsql = "INSERT INTO $tablename(fullname, email) VALUES('$fullname', '$email')";

	if(mysqli_query($conn, $insertsql)){
		echo "New record created successfully.";
		header("Location: ../view.php");
	}else{
		echo "error:" . $insertsql. "<br>" . mysqli_error($conn);
	}

?>