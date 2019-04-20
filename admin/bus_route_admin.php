<!--Major project 8th semester. Made by three people - Abhineet Singh, Hemant Sah, Ritu Kumari.-->
<?php 

	include 'dbconfig/dbconnect.php';
	include '../lib/functions-php.php';
	$buses = all_buses($dbhandle);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buses</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
		<!--////////////////////// ADD BUS div starts from here///////////////////////-->
		<div class="row">
			<div class="col-6 offset-3" >
        		<div class="alert alert-danger error_message" style="display: none; width: 100%; height: auto; line-height: 1;">
        		</div>
        			
					<form role="form" method="post" id="bus-form" style="display: none;">
						<div class="form-group">
							<h2 style="text-align: center;" class="text-white bg-dark" >Add a Bus here!</h2>
							
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>Bus plate number:</b></label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="plate-number" id="plate-number" placeholder="MP 00 XY 0000" />
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>Bus number:</b></label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="bus-number" id="bus-number" placeholder="01" />
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>Driver Name:</b></label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="driver-name" id="driver-name" placeholder="First Last" />
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>Driver Contact:</b></label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="contact" id="contact" placeholder="9876543210" />
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><b>Choose Action:</b></label>
								<div class="col-sm-9">
									<select class="form-control" id="status" name="status">
									    <option value="active">Active (Running)</option>
								    	<option value="disabled">Disabled (Not Running)</option>
							  		</select>
							  	</div>
							</div>

							<div class="col-sm-9 offset-sm-3">
					  			<input id="bus-form-input" type="submit" class="btn btn-success" value="Post"/>					  		
								<button id="hide-bus-form" class="btn btn-danger">Cancel</button>	
							</div>
					  	</div>
					</form>
				</div>
			</div>
		<!--////////////////////Table of BUSes starts here/////////////////////////-->

			<div class="row">
				<div class="col-10 offset-1">
					<table class="table text-center" id="bus-info-table">
						<thead class="thead-dark">
							<th>S.no</th>
							<th>Bus number</th>
							<th >Plate Number</th>
							<th>Driver Name</th>
							<th>Driver Contact</th>
							<th>status</th>
							<th>Actions</th>
						</thead>

						<tbody>

							<?php 
								if ($buses){
										$i=0;
									while ($row=mysqli_fetch_assoc($buses)){
										$i = $i+1;
										echo ' 
											<tr>
												<td> '.$i.'.</td>
												<td class="text-center">'.$row['bus_number'].'</td>
												<td>' . $row['plate_number'] . '</td>
												<td>' . $row['driver_name'] . '</td>
												<td>' . $row['contact'] . '</td>
												<td>' . $row['status'] . '</td>
												<td>
													<a class="btn btn-warning" class="bus-route" href="bus_route.php?bus_number=' . $row['bus_number'] . '" >Bus Route</a>
													<button class="btn btn-success" class="edit-bus" value="' . $row['id'] . '" name="edit_bus" >Edit</button>
													<button class="btn btn-danger" class="delete-bus" value="' . $row['bus_number'] . '" name="delete_bus">Delete</button>
												</td>
											</tr>';
									}
								}else{
									echo "<h4>No Bus to show.</h4>";
								}
							?>

						</tbody>
					</table>
				</div>
			</div>
	</div><!-- Container end -->

	</body>
	<script type="text/javascript" src="../assets/js/custom-js.js"></script>
	<script type="text/javascript" src="../assets/js/bus-module-js.js"></script>
</html>

