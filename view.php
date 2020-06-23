<?php
	include('connection.php');
  $sqlquery = "select fullname, email from userdetails";
?> 

<!DOCTYPE html>
<html>
<head>
	<title> Add details </title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<style type="text/css">
	</style>
</head>
<body id="userDetailsBodyBg">
	<div id="wrapper">
		<div class="paddingTop">
		 	<div class="container" id="tableContainer">
		 		<div id="loginContent">
					 <h1 id="titleHeading"> <span> View details </span>  </h1>
		 			<table>
						 <tr>
							 <th> Fullname </th>
							 <th> Email </th>
						 </tr>
						 <tr>
						 <?php
							while ($row = mysql_fetch_array($sqlquery)) {
								echo "<td> {$row['fullname']} </td>";
								echo "<td> {$row['email']} </td>";
							}
						?>
						</tr>
					 </table>
					 <br /><br />
					 <div class="form-group" id="nextPage">
						<p> Want to add the details?</p>
						<a href="index.html" class="btn btn-success btn-block ">Add detail</a>
					</div>
		 		</div>
		 	</div>
		</div>
	</div>
</body>
</html>