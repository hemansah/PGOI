<!DOCTYPE html>
<html>
<head>
	<title>Post Notification</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/sidebar.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<?php
	include_once'statics/header.php';
	?>

	<a href="#menu-toggle" class="btn btn-dark" id="menu-toggle">
        	<span id="menuHide">Menu</span>
    </a>

<!--Contents starts here -->
	<div class="container">
		<div class="row">
			<div class="col-10">
						
			</div>
		</div>
		<div class="row row-css">
			<div class="col-6 offset-2" >

        		<div class="alert alert-danger error_message" style="display: none; width: 100%; height: auto; line-height: 1;"></div>
				<form role="form" method="post" >
					<div class="form-group">
						<h6>Topic:</h6><input class="form-control" name="topic" id="topic" /><br>
						<h6>Content:</h6><textarea class="form-control" rows="10" name="detail" id="detail"></textarea>
						<br>
						<input id="notification-form" type="submit" class="btn btn-success" value="Post">
				</form>
				
			</div>
		</div>

	</div>





</body>
	<script type="text/javascript" src="../assets/js/custom-js.js"></script>
	<script type="text/javascript" src="../assets/js/admin-actions.js"></script>
</html>