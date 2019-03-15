<?php
    include_once 'lib/session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Menus</title>
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
	<div class="container">

		<div class="row">
			<div class="col-10">
				<br>
			</div>
		</div>
		<div class="row row-card">
			<div class="col-4">
				<a href="notification_admin.php"><div class="card">
  					<div class="admin-card">
    					<h4><b>Notification</b></h4> 
    						<p>Publish information here</p> 
  					</div>
				</div></a>
			</div>
			<div class="col-4">
				<a href=""><div class="card">
  					<div class="admin-card">
    					<h4><b>Attendance</b></h4> 
    						<p>Upload attendance</p> 
  					</div>
				</div></a>
			</div>
			<div class="col-4">
				<a href=""><div class="card">
  					<div class="admin-card">
    					<h4><b>Bus Route</b></h4> 
    						<p>Add bus route</p> 
  					</div>
				</div></a>
			</div>

		</div>
		<div class="row row-card">
			<div class="col-4">
				<a href=""><div class="card">
  					<div class="admin-card">
    					<h4><b>Events</b></h4> 
    						<p>Add event</p> 
  					</div>
				</div></a>
			</div>
			<div class="col-4">
				<a href=""><div class="card">
  					<div class="admin-card">
    					<h4><b>Campus</b></h4> 
    						<p>Publish information</p> 
  					</div>
				</div></a>
			</div>
			<div class="col-4">
				<a href=""><div class="card">
  					<div class="admin-card">
    					<h4><b>Syllabus</b></h4> 
    						<p>Add Syllabus</p> 
  					</div>
				</div></a>
			</div>
		</div>			
	</div>
</div>
</body>
<script type="text/javascript" src="../assets/js/custom-js.js"></script>
</html>


  