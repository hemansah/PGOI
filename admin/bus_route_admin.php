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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
			    var max_fields = 35;
			    var wrapper = $(".container1");
			    var add_button = $(".add_form_field");

			    var x = 1;
			    $(add_button).click(function(e) {
			        e.preventDefault();
			        if (x < max_fields) {
			            x++;
			            $(wrapper).append('<div><input type="text" class="form-control" placeholder="Add more..." name="stop_no[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
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
          <div class="col-12">
            <br>
          </div>
        </div>

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
						<input type="button" name="" class="btn btn-primary add_form_field" value="Add bus stops" onclick="add(document.forms[0].element.value)" style="display: inline;">
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

