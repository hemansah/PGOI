<?php
	include 'admin/dbconfig/dbconnect.php';
	include 'lib/functions-php.php';
	$notification = all_notifications($dbhandle);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notifications</title>
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
		    	<div class="col-12 title-topbar">

		    		<a href="#menu-toggle" class="btn text-white pull-left" id="menu-toggle">
        			<span id="menuHide">Menu</span>
        			</a>

		    		<?php
					include_once'statics/topbar.php';
					?>
		    	</div>
		    </div>
		    		
			<div class="row ml-5 row-css">
				<!-- Notice/Events -->
				<div class="col-sm-10 my-10 offset-1">
					<div class="typewriter">
						<h3>Notifications...</h3>
					</div>
					<div class="card card-body bg-light card-notifications ">
							<?php 
								if ($notification){
									while ($row=mysqli_fetch_assoc($notification)){
										if ($row['status']=='active') {

											date_default_timezone_set('Asia/Kolkata');
											$date1=date('Y-m-d H:i:s');
											$date2= $row['date_time'];
											$diff = strtotime($date2) - strtotime($date1);
											$diff = abs(round($diff / 86400)); 
										echo '
											<h4 ';
											    if ($diff<=3) {
											    	echo ' id= "notification_new" ';
											    }
											    echo '><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>'.$row['topic'].'</h4>
											 <p><strong>Content:</strong> ' . $row['details'] . ' </p>											
										    <div class="details">
										    	<p class="td">'.$row['date_time'].'</p>										    	
										    </div>';
										    echo '<hr class="hr-scroll">	';
										}
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