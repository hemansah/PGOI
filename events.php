<!--Major project 8th semester. Made by three people - Abhineet Singh, Hemant Sah, Ritu Kumari.-->
<?php
	include 'admin/dbconfig/dbconnect.php';
	include 'lib/functions-php.php';
	$events = all_events($dbhandle);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
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
    height: 100%;
  }
  </style>

		


		
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


        	<div class="row row-css" >
        		<div class="col-sm-8 my-10 ">
        			<div class="typewriter">
						<h3 style="text-align: center;">Events...</h3>
					</div>
        			<div class="card card-body bg-light" >

							<?php 
								if ($events){
									while ($row=mysqli_fetch_assoc($events)){
										echo '
											<h4 ><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>'.$row['topic'].'</h4>
											 <p><strong>Details: </strong> ' . $row['details'] . ' </p>											
										    <div class="details">
										    	<b><p>Event validity: '.$row['event_range'].'</p></b>										    	
										    </div>';
										    echo '<hr class="hr-scroll">	';
									}
								}else{
									echo "<h4>No Notification to show.</h4>";
								}
							?>
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