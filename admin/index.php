<!--Major project 8th semester. Made by three people - Abhineet Singh, Hemant Sah, Ritu Kumari.-->
<?php
session_start(); // Starting Session
include 'dbconfig/dbconnect.php';
  if(isset($_SESSION['name'])){  	
    header("location: admin-dashboard.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
       		<div class="center-box">
    			<!-- The Message of form here -->
        		<div id="message" class="alert alert-danger error_message" style="display: none; width: 100%; height: auto; line-height: 1;"></div>
       			<h3>Login</h3>
              	<form  method="post" role="form">
						<div class="form-group">
							<input type="text" class="form-control" id="username" placeholder="Admin's username">
						</div>

						<div class="form-group">
							<input type="password" class="form-control" id="password" placeholder="Admin's Password">
						</div>
						<input id="login-form" type="submit" class="btn btn-primary" value="Login">
					</form>
					
        	</div>
	    </div>
	</div>
</body>
<script type="text/javascript" src="../assets/js/custom-js.js"></script>
</html>

