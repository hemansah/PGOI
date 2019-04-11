<?php 

  include 'dbconfig/dbconnect.php';
  include '../lib/functions-php.php';
  $events = all_events($dbhandle);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Post Events here</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Righteous|Varela+Round" rel="stylesheet">
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
   	 <!-- Container starts from here-->

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
          <button id="add-hide-event" class="btn btn-info pull-right" style="float: right;">Add New Event</button>      
          </div>
        </div>

   		 	<div class="row">
          <div class="col-6 offset-2" >
            <div class="alert alert-danger error_message" style="display: none; width: 100%; height: auto; line-height: 1;">
            </div>
   		 			<form method="post" id="form-for-event" style="display: none;">
   		 				<h2 class="text-white bg-dark text-center">Post an event here!</h2><br>
   		 				<h6><b>Event topic:</b></h6>
   		 				<input type="text" name="topic" id="topic" class="form-control" placeholder="Add the title of the event..."/><br>
   		 				<h6><b>Content:</b></h6>
   		 				<textarea class="form-control" rows="3" name="details" id="details" placeholder="Write your content here"></textarea><br>
              <input type="text" name="datefilter" id="event_range" value="" class="form-control" placeholder="Choose range of event..." />
              <br>
              <input id="event-form" type="submit" class="btn btn-success" value="Post"/>
              <button id="hide-event" class="btn btn-danger">Cancel</button>	

   		 			</form>
   		 		</div>
   		 	</div>
<br>
        <div class="row">
          <div class="col-12">
            <table class="table">
              <thead class="thead-dark">
                <th>S.no</th>
                <th>Title</th>
                <th width="40%">Description</th>
                <th>Post Time</th>
                <th>Event Range</th>
                <th>Actions</th>
              </thead>

              <tbody>

                <?php 
                  if ($events){
                      $i=0;
                    while ($row=mysqli_fetch_assoc($events)){
                      $i = $i+1;
                      echo ' 
                        <tr>
                          <td> '.$i.'.</td>
                          <td>'.$row['topic'].'</td>
                          <td>' . $row['details'] . '</td>
                          <td>' . $row['date_time'] . '</td>
                          <td>' . $row['event_range'] . '</td>
                          <td style="float:left;">
                            <button class="btn btn-success" class="edit-event" value="' . $row['id'] . '" name="edit_event" >Edit</button>
                            <button class="btn btn-danger" class="delete-event" value="' . $row['id'] . '" name="delete_event">Delete</button>
                          </td>
                        </tr>';
                    }
                  }else{
                    echo "<h4>No Events to show.</h4>";
                  }
                ?>

              </tbody>
            </table>
          </div>
        </div>
   		 </div>



</body>
<script type="text/javascript" src="../assets/js/custom-js.js"></script>
<script type="text/javascript" src="../assets/js/admin-actions.js"></script>
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
</html>