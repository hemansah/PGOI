<?php 

	include 'admin/dbconfig/dbconnect.php';
	include 'lib/functions-php.php';
	$notification = all_notifications($dbhandle);
?>
<!---//////Index common to all//////-->

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
        <a href="#menu-toggle" class="btn btn-dark" id="menu-toggle">
        	<span id="menuHide">Menu</span>
        </a>

<!-----------------Start of Container------------------->
		<div class="container">
		    <br/>
			<div class="row ml-5">
				<!-- Notice/Events -->
				<div class="col-sm-5 my-5">
					<div class="card-body bg-light card-notification-homepage scroll">

						<div class="notice-list">
						  <ol class="notice-ol">
							<?php 
								if ($notification){
									while ($row=mysqli_fetch_assoc($notification)){

										echo ' 
											    <li class="notice-li">
											    	<h4 class="notice-span"> 
											    		<i class="fa fa-chevron-circle-right" aria-hidden="true"></i> '.$row['topic'].'
											    	</h4>
											    	<br>
											    	<p class="notice-p">' . $row['details'] . '</p>
											    </li>
						    					<hr class="."hr-scroll".">';
									}
								}else{
									echo "<h4>No Notification to show.</h4>";
								}
							?>
						  </ol> 
						</div>

					</div>

					<div class="box-click-here">
						<a href="notifications.php"><p>See all>>>>>>>></p></a>
					</div>

				</div>



					    
					    

				<div class="col-sm-5 my-5">
					<div class="card card-body bg-light event-homepage ">
					    <h2>Events</h2>
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.
					    <h2>Events</h2>
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.
					    <h2>Events</h2>
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.
					    <h2>Events</h2>
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.
					    <h2>Events</h2>
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.
					    <h2>Events</h2>
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate.

					</div>

					<div class="box-click-here-events">
						<a href="#"><p>See all>>>>>>>></p></a>
					</div>

				</div>
		        <!-- End notic/events -->

			</div>
		</div>
<!---------------------------End of Container----------------------------------->


       	<?php
		include_once'statics/header.php';
		?>
			
</body>
        <script type="text/javascript" src="assets/js/custom-js.js"></script>
		<script type='text/javascript' src="assets/js/animate-js.js"></script>
</html>
