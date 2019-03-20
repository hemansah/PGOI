<!DOCTYPE html>
<html>
<head>
	<title>Post Events here</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/sidebar.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>
<body>

	<?php
	include_once'statics/header.php';
	?>

		 <a href="#menu-toggle" class="btn btn-dark" id="menu-toggle">
        	<span id="menuHide">Menu</span>
   		 </a>


   		 <!-- Container starts from here----------->

   		 <div class="container">
   		 	<div class="row">
   		 		<div class="col-12">
   		 			<br>
   		 		</div>
   		 	</div>

   		 	<div class="row">
   		 		<div class="col-6 offset-2">
   		 			<form >
   		 				<h2 class="text-white bg-dark">Post an event here!</h2><br>
   		 				<h6><b>Event topic:</h6>
   		 				<input type="text" name="" class="form-control" placeholder="Add the title of the event..."/><br>
   		 				<h6><b>Content</h6>
   		 				<textarea class="form-control" rows="10" name="" id="" placeholder="Write your content here"></textarea><br>

                     <input type="text" name="datefilter" value="" class="form-control" placeholder="Choose range of event..." />

                        <script type="text/javascript">
                        $(function() {

                          $('input[name="datefilter"]').daterangepicker({
                              autoUpdateInput: false,
                              locale: {
                                  cancelLabel: 'Clear'
                              }
                          });

                          $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                              $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                          });

                          $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
                              $(this).val('');
                          });

                        });
                        </script>

   		 			<br>	<input type="submit" class="btn btn-success" value="Post Event" name=""/>
   		 				<button class="btn btn-danger">Cancel</button>	

   		 			</form>
   		 		</div>
   		 	</div>
   		 </div>



</body>
<script type="text/javascript" src="../assets/js/custom-js.js"></script>

</html>