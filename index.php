<!--Major project 8th semester. Made by three people - Abhineet Singh, Hemant Sah, Ritu Kumari.-->

<?php 

	include 'admin/dbconfig/dbconnect.php';
	include 'lib/functions-php.php';
	$notification = all_notifications($dbhandle);
	$events = all_events($dbhandle);
?>


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
		    height: 100vh;
		    padding: 0px;
		  }
		  #section-scroll a {
			padding-top: 80px;
			border: 2px solid rgba(226, 55, 55, 0.7);
			border-radius: 20px;
			width: 4%;
		}
		#section-scroll a span {
		  position: absolute;
		  top: 0;
		  left: 50%;
		  width: 24px;
		  height: 24px;
		  margin-left: -12px;
		  border-left: 3px solid #E23737;
		  border-bottom: 3px solid #E23737;
		  -webkit-transform: rotate(-45deg);
		  transform: rotate(-45deg);
		  -webkit-animation: scroll_down_btn 2s infinite;
		  animation: scroll_down_btn 2s infinite;
		  opacity: 0;
		  box-sizing: border-box;
		}
		#section-scroll a span:nth-of-type(1) {
		  -webkit-animation-delay: 0s;
		  animation-delay: 0s;
		}
		#section-scroll a span:nth-of-type(2) {
		  top: 16px;
		  -webkit-animation-delay: .15s;
		  animation-delay: .15s;
		}
		#section-scroll a span:nth-of-type(3) {
		  top: 32px;
		  -webkit-animation-delay: .3s;
		  animation-delay: .3s;
		}
		@-webkit-keyframes scroll_down_btn {
		  0% {
		    opacity: 0;
		  }
		  50% {
		    opacity: 1;
		  }
		  100% {
		    opacity: 0;
		  }
		}
		@keyframes scroll_down_btn {
		  0% {
		    opacity: 0;
		  }
		  50% {
		    opacity: 1;
		  }
		  100% {
		    opacity: 0;
		  }
		}
		.scroll-down-button a {
		  position: absolute;
		  bottom: 20px;
		  left: 48%;
		  z-index: 2;
		  display: inline-block;
		  -webkit-transform: translate(0, -50%);
		  transform: translate(0, -50%);
		  color: #E23737;
		  letter-spacing: .1em;
		  text-decoration: none;
		  transition: opacity .3s;
		}
		.scroll-down-button a:hover {
		  opacity: 1;
		}
		@media only screen and (max-width: 768px) {
			#section-scroll a {
			width: 10%;
			}
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
		    	<section id="section-scroll" class="scroll-down-button">
				  <a href="#scroll-till-here" id="scroll-first"><span></span><span></span><span></span></a>
				</section>
		    </div>


			<div class="row ml-2 ">
				<!-- Notice/Events -->
				<div class="col-sm-5 my-5 offset-sm-1" id="scroll-till-here">
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
											echo '<h5 style="font-weight:bolder;"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> &nbsp;'.$row['topic'].'</h5> 
													<div class="ml-4">' . $row['details'] . '</div><hr>';
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
						<a href="notifications.php"><p>See all></p></a>
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
											echo '<h5 style="font-weight:bolder;"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> &nbsp;'.$row['topic'].'</h5> 
													<div class="ml-4">' . $row['details'] . '
														<br><b>Event date:</b>' . $row['event_range'] . '
													</div><hr>';
									}
								}else{
									echo "<h4>No Events to show.</h4>";
								}
							?>

					</div>

					<div class="box-click-here-events">
						<a href="events.php"><p>See all></p></a>
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
		<script type="text/javascript">
			$(function() {
	  			$('#scroll-first').on('click', function(e) {
		    		e.preventDefault();
		    		$('html, body').animate({ 
		    				scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear'
		    			);
				});
			});
		</script>
</html>
