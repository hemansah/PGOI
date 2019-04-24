<!--Major project 8th semester. Made by three people - Abhineet Singh, Hemant Sah, Ritu Kumari.-->
<?php 

	include 'admin/dbconfig/dbconnect.php';
	include 'lib/functions-php.php';
	$sql = "SELECT DISTINCT bus_number FROM buses";
	$result = mysqli_query($dbhandle,$sql);

	if (isset($_GET['get-bus-information'])) {
		$bus_number = $_REQUEST['sel_bus_number'];
		$bus_stops = bus_stops($dbhandle,$bus_number);
		$bus_info = bus_info($dbhandle,$bus_number);
	}
?>
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
		<style type="text/css">
			.table-dark th{
				border:none;
			}
			h5{
				display:s inline;
			}
			@media (min-width: 1025px){
				/*#row-of-busInfo{
					float: right;
				}*/ 
				
			/*div.container-fluid div:last-child div.bus-stops-list{
			  margin-left: 20%;
			}*/
			}
		</style>
</head>


<body>
	<?php
	include_once'statics/header.php';
	?>

	<!--/////////////////// Start of Container /////////////////-->
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

			<form method="get" action="" >
				<div class="row">
					<div class="col-sm-3 offset-4">
						<select class="form-control" name="sel_bus_number">
							<option value="0">Select bus number</option>
							<?php 
								$i=1;
								while ($row = mysqli_fetch_assoc($result)) {
									echo '<option value="'.$row['bus_number'].'">Bus no.'.$row['bus_number'].' </option>';
									$i++;
								}
							?>
						</select>
					</div>

					<div class="col-sm-4">
						<input class="btn btn-success" type="submit" name="get-bus-information" value="Go">
					</div>
				</div>
			</form>
			<hr>

<!--///////////////// Row for showing routes ///////////////////////-->
							<?php 
							$i=0;
								while ( isset($bus_info) && $row = mysqli_fetch_assoc($bus_info)) {
									if ($i==0) {
							echo '
						<div class="row my-3"  id="row-of-busInfo" >
							<div class="col-sm-12">
								<table class="table table-dark table-striped text-center" style="border-radius: 10px;">
									<thead>
										<th>Bus Number</th>
										<th>Plate Number</th>
										<th>Driver name</th>
										<th>Driver Mobile</th>							
									</thead>
									<tbody>

							';
									}
									$i++;
									if ($row['status']=='active') {
										echo ' 
											<tr>
												<td>'.$row['bus_number'].'</td>
												<td>' . $row['plate_number'] . '</td>
												<td>' . $row['driver_name'] . '</td>
												<td>' . $row['contact'] . '</td>
											</tr>';
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</div>

			<?php 
			$i = 1;
				while (isset($bus_stops) && $row = mysqli_fetch_assoc($bus_stops)) {
					if ($i==1) {
						echo '
							<div class="row">
								<div class="col-sm-4 offset-2">
									<h5>Source </h5>
								</div>
							</div>' ;
					}
						echo '
						<div class="row">
							<div class="col-sm-4 offset-2 bus-stops-list">
								<div class="vertline"></div>
								<div class="vertline-after"></div>
								<h5><b>Stop '.$i.' : </b>'.$row['bus_stop'].' - '. $row['pick_time'] . '</h5> 
							</div>
						</div>';
							$i++;
				}
			?>

	</div>		


<!--End of Container-->
				<!-- <?php
					include_once'statics/footer.php';
					?> -->
</body>
<script type="text/javascript" src="assets/js/custom-js.js"></script>
<script type='text/javascript' src="assets/js/animate-js.js"></script>
</html>


						




					
				    
					