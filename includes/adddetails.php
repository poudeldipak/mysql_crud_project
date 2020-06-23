<?php
	include('createtable.php');

	$email = $_POST['email'];
	$fullname = $_POST['fullname'];

	$insertsql = "INSERT INTO signuptable(fullname, email) VALUES('$fullname', '$email')";

	if(mysqli_query($conn, $insertsql)){
		echo "new record created successfully";
		header("Location: ../../view.php");
	}else{
		echo "error:" . $insertsql. "<br>" . mysqli_error($conn);
	}

?>