<!DOCTYPE html>
<html>
<head>
	<title>Add Bus Route</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/sidebar.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
    var max_fields = 30;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div><input type="text" class="form-control" placeholder="Keep adding more..." name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});	
		</script>
</head>
<body>

	<?php
	include_once'statics/header.php';
	?>

	<a href="#menu-toggle" class="btn btn-dark" id="menu-toggle">
        	<span id="menuHide">Menu</span>
    </a>


	<div class="container-fluid">

		<div class="row">
			<div class="col">
				<br><br>
			</div>
		</div>

		<form>
			<div class="row">
				<div class="col-sm-5 offset-1">
					
						<select class="form-control" id="" name="">
							<option>Choose Bus number</option>
							<option>Bus no 1</option>
							<option>Bus no 2</option>
							<option>Bus no 3</option>
							<option>Bus no 4</option>
							<option>Bus no 5</option>
							<option>Bus no 7</option>
							<option>Bus no 8</option>
							<option>Bus no 9</option>
							<option>Bus no 10</option>
							<option>Bus no 11</option>
							<option>Bus no 12</option>
							<option>Bus no 13</option>
							<option>Bus no 14</option>
							<option>Bus no 15</option>
							<option>Bus no 17</option>
						</select><br>
				</div>	
			</div>	

			<div class="row">
				<div class="col-sm-5 offset-1 container1">
					<input type="text" name="" value="" placeholder="Add 1st bus stop" class="form-control"><br>
					<input type="text" name="" value="" placeholder="Add 2nd bus stop" class="form-control"><br>
					<input type="text" name="" value="" placeholder="Add 3rd bus stop" class="form-control"><br>
					<input type="text" name="" value="" placeholder="Add 4th bus stop" class="form-control"><br>
					<input type="text" name="" value="" placeholder="Add 5th bus stop" class="form-control"><br>
					
				</div>
			</div>	


				<div class="row">
					
					<div class="col-sm-2 offset-1">
						<input type="button" name="" value="Save" class="btn btn-success">
					</div>
					<div class="col-sm-2">
						<input type="button" name="" value="Cancel" class="btn btn-danger">
					</div>		

					<div class="col-sm-2 ">
						<input type="button" name="" class="btn btn-primary add_form_field" value="Add more bus stops" onclick="add(document.forms[0].element.value)" style="display: inline;">
					</div>
				</div>

				
				</div>
			</div>
		</form>
	</div>
</body>
<script type="text/javascript" src="../assets/js/custom-js.js"></script>
<script type="text/javascript" src="../assets/js/admin-actions.js"></script>
</html>

