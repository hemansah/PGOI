<!DOCTYPE html>
<html>
<head>
	<title>Add Bus Route</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous|Varela+Round" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/sidebar.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		
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

		<div class="row row-css">
			<div class="col-12 ">
				<button id="add-hide-bus-form" class="btn btn-info pull-right" style="float: right;">Add Bus</button>			
			</div>
		</div>
		<!--////////////////////// Posting Notification div starts from here///////////////////////-->
		<div class="row">
			<div class="col-6 offset-3" >
        		<div class="alert alert-danger error_message" style="display: none; width: 100%; height: auto; line-height: 1;">
        		</div>
        			
					<form role="form" method="post" id="bus-form" style="display: none;">
						<div class="form-group">
							<h2 style="text-align: center;" class="text-white bg-dark" >Add a Bus here!</h2>
							<h6><b>Bus number:</b></h6>
							<input type="text" class="form-control" name="bus-number" id="bus-number" placeholder="MP 4444 XY 44" /><br>
							<h6><b>Driver Name:</b></h6>
							<input type="text" class="form-control" name="driver-name" id="driver-name" placeholder="First Last" /><br>
							<h6><b>Driver Contact:</b></h6>
							<input type="number" class="form-control" name="contact" id="contact" placeholder="9876543210" /><br>
							<label><b>Choose Action:</b></label>
							<select class="form-control" id="status" name="status">
							    <option value="active">Active / Running</option>
						    	<option value="disable">Disabled / Not Running</option>
					  		</select><br>
					  		<input id="notification-form" type="submit" class="btn btn-success" value="Post"/>					  		
							<button id="hide-bus-form" class="btn btn-danger">Cancel</button>	
					  	</div>
					</form>
				</div>
			</div>
		<!--////////////////////Posting Notification ends here/////////////////////////-->

		<form method="post" >
			<div class="row">
				<div class="col-sm-6 offset-3">
					
						<select class="form-control" id="bus_no_select" name="bus_no_select">
							<option value="0">Choose Bus number</option>
							<option>Bus no 1</option>
							<option>Bus no 2</option>
							<option>Bus no 3</option>
							<option>Bus no 4</option>
						</select>
						<h5 class="text-center">OR Enter number</h5>
						<input type="text" name="bus_no_input"  class="form-control"  placeholder="Number only(No alphabet)"><br>

				</div>	
			</div>	

			<div class="row">
				<div class="col-sm-6 offset-3 container1">
					
				</div>
			</div>	


				<div class="row">
					
					<div class="col-sm-2 offset-3">
						<input type="button" name="" value="Save" class="btn btn-success">
					</div>
					<div class="col-sm-2">
						<input type="button" name="" value="Cancel" class="btn btn-danger">
					</div>		

					<div class="col-sm-2 ">
						<input type="button" name="" class="btn btn-primary add_form_field" value="Add bus stops" style="display: inline;">
					</div>
				</div>

				
				</div>
			</div>
		</form>
	</div>
</body>
	<script type="text/javascript" src="../assets/js/custom-js.js"></script>
	<script type="text/javascript" src="../assets/js/bus-module-js.js"></script>
</html>

