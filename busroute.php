<!DOCTYPE html>
<html>
<head>
	<title>Bus Routes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link href="https://fonts.googleapis.com/css?family=Righteous|Varela+Round" rel="stylesheet">
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

	<!------------- Start of Container----------------------->
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
			<div class="col-sm-12">
				<br>
			</div>			
		</div>

			<form>
				<div class="row">
					<div class="col-sm-3 offset-4">
						<select class="form-control">
							<option>Select bus number</option>
							<option>Bus no. 1</option>
							<option>Bus no. 2</option>
							<option>Bus no. 3</option>
							<option>Bus no. 4</option>
							<option>Bus no. 5</option>
							<option>Bus no. 6</option>
						</select>
					</div>

					<div class="col-sm-4">
						<input class="btn btn-success" type="button" name="" value="Go">
					</div>
				</div>
			</form>

<!------------------Row for showing routes ------------------------------>

			<div class="row">
				<div class="col-sm-4 offset-1">
					<h5>Source: </h5>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 offset-1">
					<h6>Stop 1:</h6>
					<div class="vertline"></div>
					<div class="vertline-after">
						
					</div>
				</div>			
			</div>

			<div class="row">
				<div class="col-sm-4 offset-1">
					<h6>Stop 1:</h6>
					<div class="vertline"></div>
					<div class="vertline-after">
						
					</div>
				</div>			
			</div>

			<div class="row">
				<div class="col-sm-4 offset-1">
					<h6>Stop 1:</h6>
					<div class="vertline"></div>
					<div class="vertline-after">
						
					</div>
				</div>			
			</div>
				

			

			

			


	</div>		


<!---------------------------End of Container----------------------------------->
				<?php
					include_once'statics/footer.php';
					?>
</body>
<script type="text/javascript" src="assets/js/custom-js.js"></script>
<script type='text/javascript' src="assets/js/animate-js.js"></script>
</html>


						




					
				    
					