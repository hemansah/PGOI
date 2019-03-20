<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">	

		<link href="https://fonts.googleapis.com/css?family=Righteous|Varela+Round" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
		    	<div class="col-12 title-topbar">

		    		<a href="#menu-toggle" class="btn text-white pull-left" id="menu-toggle">
        			<span id="menuHide">Menu</span>
        			</a>

		    		<?php
					include_once'statics/topbar.php';
					?>
		    	</div>
		    </div>


        	<div class="row">
        		<div class="col-12">
        			<div id="myCarousel" class="carousel slide" data-ride="carousel">
					    <!-- Indicators -->
					    <ol class="carousel-indicators">
					      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					      <li data-target="#myCarousel" data-slide-to="1"></li>
					      <li data-target="#myCarousel" data-slide-to="2"></li>
					    </ol>

					    <!-- Wrapper for slides -->
					    <div class="carousel-inner">
					      <div class="item active image-height">
					        <img class="" src="assets/images/image1.jpg" alt="Los Angeles" style="width:100%;">
					      	<div class="carousel-caption">
					          <h2>Dummy Image 1</h2>
					          <p>It's beautiful...</p>
					        </div>
					      </div>

					      <div class="item image-height">
					        <img class="" src="assets/images/image2.jpg" alt="Chicago" style="width:100%;">
					      	<div class="carousel-caption">
					          <h2>Dummy Image 2</h2>
					          <p>We love the Big Apple!</p>
					        </div>
					      </div>
					    
					      <div class="item image-height">
					        <img class="" src="assets/images/image3.jpg" alt="New york" style="width:100%;">
					        <div class="carousel-caption">
					          <h2>Dummy Image 3</h2>
					          <p>We love the Big Apple!</p>
					        </div>
					      </div>
					    </div>

					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					      <span class="glyphicon glyphicon-chevron-left"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" data-slide="next">
					      <span class="glyphicon glyphicon-chevron-right"></span>
					      <span class="sr-only">Next</span>
					    </a>
					  </div>
        		</div>
        	</div>
        </div>
<?php
					include_once'statics/footer.php';
					?>

</body>

<script type="text/javascript" src="assets/js/custom-js.js"></script>


</html>