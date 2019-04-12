<?php 

	include 'admin/dbconfig/dbconnect.php';
	include 'lib/functions-php.php';
	$notification = all_notifications($dbhandle);
	$events = all_events($dbhandle);
?>
<!---//////Index common to all//////-->

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link href="https://fonts.googleapis.com/css?family=Righteous|Varela+Round" rel="stylesheet">

		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="assets/css/sidebar.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
		<style>
		  /* Make the image fully responsive */
		  .carousel-inner img {
		    width: 100%;
		    height: 83vh;
		    padding: 0px;
		  }
  		</style>
  		

  		
</head>
<body>

	

	<?php
	include_once'statics/header.php';
	?>
        
<!--///////////////Start of Container/////////////////-->
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
		    	<div class="col-sm-12" style="padding: 0px;">
		    		<div id="demo" class="carousel slide" data-ride="carousel">
						  <ul class="carousel-indicators">
						    <li data-target="#demo" data-slide-to="0" class="active"></li>
						    <li data-target="#demo" data-slide-to="1"></li>
						    <li data-target="#demo" data-slide-to="2"></li>
						  </ul>
  
  					<div class="carousel-inner">
   						<div class="carousel-item active">
      						<img src="assets/images/image2.jpg" alt="Los Angeles" width="1100" height="500">
						      <div class="carousel-caption">
						        <h3></h3>
						        <p></p>
						      </div>   
    					</div>
    
    				<div class="carousel-item">
      					<img src="assets/images/image3.jpg" alt="Chicago" width="1100" height="500">
     						<div class="carousel-caption">
						        <h3></h3>
						        <p></p>
					      	</div>   
					</div>


    				<div class="carousel-item">
     					<img src="assets/images/image4.jpg" alt="New York" width="1100" height="500">
      						<div class="carousel-caption">
						        <h3></h3>
						        <p></p>
      						</div>   
    					</div>
  					</div>
  
					  <a class="carousel-control-prev" href="#demo" data-slide="prev">
					    <span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next" href="#demo" data-slide="next">
					    <span class="carousel-control-next-icon"></span>
					  </a>
					
					</div>

		    	</div>
		    </div>


			<div class="row ml-5 ">
				<!-- Notice/Events -->
				<div class="col-sm-5 my-5 offset-sm-1">
							<div style="position: relative;">
								<div class="vertical-text">Notice Board</div>
							</div>
					<div class="card-body bg-light card-notification-homepage scroll">

						<div class="notice-list">
						  <ol class="notice-ol">
							<?php 
								if ($notification){
									while ($row=mysqli_fetch_assoc($notification)){

										if ($row['status']=='active') {
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
							<div style="position: relative;">
								<div class="vertical-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Events &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
							</div>
					<div class="card card-body bg-light event-homepage scrollbar" id="style-scroll">
							<?php 
								if ($events){
									while ($row=mysqli_fetch_assoc($events)){
											echo '<h4> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> &nbsp;'.$row['topic'].'</h4> 
													<div class="ml-4">' . $row['details'] . '
														<br><b>Event date:</b>' . $row['event_range'] . '
													</div>';
									}
								}else{
									echo "<h4>No Events to show.</h4>";
								}
							?>

					</div>

					<div class="box-click-here-events">
						<a href="events.php"><p>See all>>>>>>>></p></a>
					</div>

				</div>
		        <!-- End notic/events -->

			</div>

		</div>
<!--//////////////// End of Container////////////////-->
				<?php include_once'statics/footer.php'; ?>

</body>
        <script type="text/javascript" src="assets/js/custom-js.js"></script>
		<script type='text/javascript' src="assets/js/animate-js.js"></script>
</html>
