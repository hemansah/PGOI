<!DOCTYPE html>
<html>
<head>
	<title>Campus PGOI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link href="https://fonts.googleapis.com/css?family=Righteous|Varela+Round" rel="stylesheet">

		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="assets/css/sidebar.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


	<?php
	include_once'statics/header.php';
	?>

	<div class="container-fluid">
		 <div class="row">
		    	<div class="col-sm-12 title-topbar">

		    		<a href="#menu-toggle" class="btn text-white pull-left" id="menu-toggle">
        			<span id="menuHide">Menu</span>
        			</a>

		    		<?php
					include_once'statics/topbar.php';
					?>
		    	</div>
		    </div>

<!-------------------Row for NavBar for Campus------------------------------------->
		    <div class="row">
		    	<div class="col-sm-12" style="padding: 0px;">
		    		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  						<a class="navbar-brand" href="#">PGOI</a>
  							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    							<span class="navbar-toggler-icon"></span>
  							</button>
					  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    						<div class="navbar-nav">
						      <a class="nav-item nav-link active" href="#">Campus <span class="sr-only">(current)</span></a>
						      <a class="nav-item nav-link" href="#">Hostel Facility</a>
						      <a class="nav-item nav-link" href="#">Cafeteria</a>
						      <a class="nav-item nav-link" href="#">Sports</a>
						      <a class="nav-item nav-link disabled" href="#">etc</a>
    						</div>
  					  </div>
					</nav>
		    	</div>
		    </div>
<!-------------------------------End of NavBar row----------------------------------------->
		    <div class="row">
		    	<div class="col-sm-4">
					<div class="typewriter-campus">Patel College of Science & Technology</div>
						<div class="card card-body bg-light" >
							<img src="assets/images/image5.jpg" alt="abc" class="img-fluid">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.</p>
						</div>		
		    	</div>
							
		    	<div class="col-sm-4">
		   			<div class="typewriter-campus">Patel Institute of Engineering & Science</div>
		    			<div class="card card-body bg-light" >
		    				<img src="assets/images/image16.jpg" alt="abc" class="img-fluid">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.</p>
						</div>
		    	</div>
		    		
		    	<div class="col-sm-4">
		   			<div class="typewriter-campus">Patel College of Pharmacy</div>
		    			<div class="card card-body bg-light" >
		    				<img src="assets/images/image6.jpg" alt="abc" class="img-fluid">
		    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.</p>
						</div>
		    	</div>
		    </div>

		    <div class="row">
		    	<div class="col-sm-4">
		    		<div class="typewriter-campus">Hostel Facilities</div>
		    			<div class="card card-body bg-light" >
		    				<img src="assets/images/image15.jpg" alt="abc" class="img-fluid">
		    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.</p>
						</div>
		    	</div>

		    	<div class="col-sm-4">
		    		<div class="typewriter-campus">Sports</div>
		    			<div class="card card-body bg-light" >
		    				<img src="assets/images/image14.jpg" alt="abc" class="img-fluid">
		    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.</p>
						</div>
		    	</div>

		    	<div class="col-sm-4">
		    		<div class="typewriter-campus">Workshops</div>
		    			<div class="card card-body bg-light" >
		    				<img src="assets/images/image1.jpg" alt="abc" class="img-fluid">
		    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.</p>
						</div>
		    	</div>
		    </div>

		    <div class="row">
		    	<div class="col-sm-4">
		    		<div class="typewriter-campus">Cafeteria</div>
		    			<div class="card card-body bg-light" >
		    				<img src="assets/images/image7.jpg" alt="abc" class="img-fluid">
		    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.</p>
						</div>
		    	</div>
		    </div>
					
	</div>
							

	

</body>
<script type="text/javascript" src="assets/js/custom-js.js"></script>
<script type='text/javascript' src="assets/js/animate-js.js"></script>
</html>