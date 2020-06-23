<!DOCTYPE html>
<html>
<head>
	<title> Add details </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<style type="text/css">
	</style>
</head>
<body id="signupBodyBg">
	<div id="wrapper">
		<div class="paddingTop">
		 	<div class="container" id="formContainer">
		 		<div id="loginContent">
					 <h1 id="titleHeading"> <span> Add detail</span>  </h1>
		 			<form action="includes/adddetails.php" method="post"> <br>
		 				<div class="form-group">
             <div class="form-group">
		 				  <label for="fullname">Fullname</label>
		 				  <input type="text" class="form-control" name="fullname" id="fullname" required="" placeholder="Enter Fullname">
		 				</div>
		 				  <label for="email">Email</label>
		 				  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required="">
		 				</div>
		 				<div class="form-group">
		 				  <button type="submit" class="btn btn-danger btn-block">Add details</button>
		 				</div>
					 </form>
					 <br />
					 <div class="form-group" id="nextPage">
						<p> Want to view all the details?</p>
						<a href="view.html" class="btn btn-success btn-block ">View details</a>
					</div>
		 		</div>
		 	</div>
		</div>
	</div>
</body>
</html>