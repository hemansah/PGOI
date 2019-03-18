<!DOCTYPE html>
<html>
<head>
	<title>Post Notification</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/sidebar.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<?php
	include_once'statics/header.php';
	?>

	<a href="#menu-toggle" class="btn btn-dark" id="menu-toggle">
        	<span id="menuHide">Menu</span>
    </a>

<!--Contents starts here -->
	<div class="container">
		<div class="row">
			<div class="col-10">
						
			</div>
		</div>

		<div class="row row-css">
			<div class="col-12 ">
			<button class="btn btn-info pull-right" style="float: right;">Add Notification</button>			
			</div>
		</div>

<!----------------------Posting Notification div starts from here-------------------->
		<div class="row">
			<div class="col-6 offset-2" >
        		<div class="alert alert-danger error_message" style="display: none; width: 100%; height: auto; line-height: 1;">
        		</div>
        			
					<form role="form" method="post" >
						<div class="form-group">
							<h2 style="text-align: center;" class="text-white bg-dark" >Post a Notification here!</h2>
							<h6><b>Topic:</b></h6>
							<input class="form-control" name="topic" id="topic" placeholder="Add the title of the notification..." /><br>
							<h6><b>Content:</b></h6>
							<textarea class="form-control" rows="10" name="detail" id="detail" placeholder="Write your content here..."></textarea>
							<label><b>Choose Action:</b></label>
							<select class="form-control" id="" name="">
							    <option id="">Post Now</option>
						    	<option id=""  >Post Later</option>
					  		</select><br>
					  		<input id="notification-form" type="submit" class="btn btn-success" value="Post">
					  	</div>
					</form>
				</div>
			</div>
<!----------------------Posting Notification ends here-------------------------->


		<div class="row">
			<div class="col-11">
				<table class="table">
					<thead class="thead-dark">
						<th>S.no</th>
						<th>Title</th>
						<th>Description</th>
						<th>Post Time</th>
						<th>Actions</th>
					</thead>

					<tbody>
						<tr>
							<td>1.</td>
							<td>Hello</td>
							<td>World is here...</td>
							<td>hh:mm dd/mm/yyyy</td>
							<td>
								<button class="btn btn-success" id="" name="">Edit</button>
								<button class="btn btn-primary">Hide/Unhide</button>
								<button class="btn btn-danger" id="" name="">Delete</button>
							</td>
						</tr>

						<tr>
							<td>1.</td>
							<td>Hello</td>
							<td>World is here...</td>
							<td>hh:mm dd/mm/yyyy</td>
							<td>
								<button class="btn btn-success" id="" name="">Edit</button>
								<button class="btn btn-danger" id="" name="">Delete</button>
							</td>
						</tr>

						<tr>
							<td>1.</td>
							<td>Hello</td>
							<td>World is here...</td>
							<td>hh:mm dd/mm/yyyy</td>
							<td>
								<button class="btn btn-success" id="" name="">Edit</button>
								<button class="btn btn-danger" id="" name="">Delete</button>
							</td>
						</tr>

						<tr>
							<td>1.</td>
							<td>Hello</td>
							<td>World is here...</td>
							<td>hh:mm dd/mm/yyyy</td>
							<td>
								<button class="btn btn-success" id="" name="">Edit</button>
								<button class="btn btn-danger" id="" name="">Delete</button>
							</td>
						</tr>

						<tr>
							<td>1.</td>
							<td>Hello</td>
							<td>World is here...</td>
							<td>hh:mm dd/mm/yyyy</td>
							<td>
								<button class="btn btn-success" id="" name="">Edit</button>
								<button class="btn btn-danger" id="" name="">Delete</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div>
		
						    
</body>
	<script type="text/javascript" src="../assets/js/custom-js.js"></script>
	<script type="text/javascript" src="../assets/js/admin-actions.js"></script>
</html>
				
						







