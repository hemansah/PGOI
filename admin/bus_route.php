<!--Major project 8th semester. Made by three people - Abhineet Singh, Hemant Sah, Ritu Kumari.-->
<?php 

	include 'dbconfig/dbconnect.php';
	include '../lib/functions-php.php';
	$bus_stops = bus_stops($dbhandle,$_REQUEST['bus_number']);
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


		<div class="row">
			<div class="col-12 ">
				<a class="btn btn-info pull-right" href="bus_route_admin.php"> &laquo;BACK </a>			
			</div>
		</div>

			<div class="row">
				<div class="col-sm-10 offset-sm-1">
					
					<select style="display: inline;" class="col-sm-2 form-control" id="bus_number" name="bus_number" disabled>
						<option>Bus number: <?= $_REQUEST['bus_number']; ?> </option>
					</select>
					<div class="pull-right">
						<button class="btn btn-primary" id="add-stop-form" style="display: inline;">Add bus stop</button>
					</div>
				</div>
			</div>	
			<!--////////////////////Table of BUSes starts here/////////////////////////-->

			<div class="row my-3" >
				<div class="col-10 offset-1">
					<table class="table text-center" id="bus-stops-table">
						<thead class="thead-dark">
							<th> S.no </th>
							<th> Bus stop name </th>
							<th> Time </th>
							<th>Actions</th>
						</thead>

						<tbody>

							<?php 
								if ($bus_stops){
										$i=0;
									while ($row=mysqli_fetch_assoc($bus_stops)){
										$i = $i+1;
										echo ' 
											<tr>
												<td> '.$i.'.</td>
												<td class="text-center">'.$row['bus_stop'].'</td>
												<td>' . $row['pick_time'] . '</td>
												<td>
													<button class="btn btn-danger" class="delete-bus" value="' . $row['id'] . '" name="delete_bus_stop">Delete</button>
												</td>
											</tr>';
									}
								}else{
									echo "<h4>No Bus stop to show.</h4>";
								}
							?>

						</tbody>
					</table>
				</div>
			</div>

		<form method="post" id="bus-stop-form" style="display: none;">
			<input type="hidden" id="bus-number" name="bus_number" <?php echo 'value = "'.$_REQUEST['bus_number'].'"'; ?> >
			<div class="row my-3">
				<div class="col-10 offset-1">
					<table class="table text-center" id="stop-table-form">
						<thead class="thead-dark">
							<th> S.no </th>
							<th> Bus stop name </th>
							<th> Time </th>
							<th> Actions </th>
						</thead>

						<tbody>

						</tbody>
					</table>

						<table class="mx-5">
							<tr>
								<button class="btn btn-primary add_form_field" style="display: inline;">Add more stop</button>
								<input type="submit" name="bus-top-save" value="Save" id="bus-stop-input" class="btn btn-success">
								<button class="btn btn-danger" id="cancel-bus-stop">Cancel</button>
							</tr>
						</table>
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

