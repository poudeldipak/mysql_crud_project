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
						 <?php
							include('database/connection.php');
							$sqlquery = "SELECT * FROM $tablename";
							if($result=mysqli_query($conn,$sqlquery)){
								if (mysqli_num_rows($result) > 0 ) {
										while($row = $result->fetch_assoc()) {
											echo "<tr>";
											echo "<td> {$row['fullname']} </td>";
											echo "<td> {$row['email']} </td>";
											echo "</tr>";
									}
									} else{
										echo "<tr>";
										echo "<td colspan=2> No data found </td>";
										echo "</tr>";
									}
							} else{
									echo "ERROR: Could not able to execute " . $sqlquery. "<br>" . mysqli_error($conn);
							}
						?>
					 </table>
					 <br /><br />
					 <div class="form-group" id="nextPage">
						<p> Want to add the details?</p>
						<a href="index.php" class="btn btn-success btn-block ">Add detail</a>
					</div>
		 		</div>
		 	</div>
		</div>
	</div>
</body>
</html>