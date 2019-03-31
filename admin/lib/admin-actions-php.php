<?php 
	session_start();
	include '../dbconfig/dbconnect.php';

	$action = $_POST['action'];
	/***********************************
	****Action for Notification form****
	************************************/
	if ($action == 'notice-form') {
	 	$topic = $_POST['topic']; 
	 	$details = $_POST['details'];
	 	$post_by = $_SESSION['name'];
	 	$status = $_POST['status'];
	 	$sql = "INSERT INTO notification(topic, details,status,post_by) VALUES('$topic','$details','$status','$post_by')";
		$result = mysqli_query($dbhandle, $sql);
		if ($result) {
			$responseArray = ["success" => true, "msg" => "Notification added successfully" ];
			echo json_encode($responseArray);
			die;
		} else{
			$responseArray = ["success" => false, "error" => "Details or Topic may contain special characters! Try again."];
			echo json_encode($responseArray);
			die;
		}
	}

	if ($action == 'delete-notification') {
	 	$noticeId = $_POST['noticeId'];
	 	$sql = "DELETE from notification WHERE id=$noticeId";
		$result = mysqli_query($dbhandle, $sql);
		if ($result) {
			$responseArray = ["success" => true, "msg" => "Notification Deleted successfully" ];
			echo json_encode($responseArray);
			die;
		} else{
			$responseArray = ["success" => false, "error" => "Something went wrong! Try again."];
			echo json_encode($responseArray);
			die;
		}
	}	
	if ($action == 'update-notification') {
	 	$noticeId = $_POST['noticeId'];
	 	$topic = $_POST['topic'];
	 	$details = $_POST['details'];
	 	$status = $_POST['status'];
	 	$post_by = $_SESSION['name'];
	 	$sql = "UPDATE notification SET topic = '$topic', details = '$details', status = '$status', post_by = '$post_by' WHERE id=$noticeId";
		$result = mysqli_query($dbhandle, $sql);
		if ($result) {
			$responseArray = ["success" => true, "msg" => "Notification Updated successfully" ];
			echo json_encode($responseArray);
			die;
		} else{
			$responseArray = ["success" => false, "error" => "Something went wrong! Try again."];
			echo json_encode($responseArray);
			die;
		}
	}	

	/***********************************
	****Action for Event's form****
	************************************/
	if ($action == 'event-form') {
	 	$topic = $_POST['topic']; 
	 	$details = $_POST['details'];
	 	$post_by = $_SESSION['name'];
	 	$event_range = $_POST['event_range'];
	 	$sql = "INSERT INTO events(topic, details,event_range,post_by) VALUES('$topic','$details','$event_range','$post_by')";
		$result = mysqli_query($dbhandle, $sql);
		if ($result) {
			$responseArray = ["success" => true, "msg" => "Event added successfully" ];
			echo json_encode($responseArray);
			die;
		} else{
			$responseArray = ["success" => false, "error" => "Entered details may contain special characters! Try again."];
			echo json_encode($responseArray);
			die;
		}
	}
	if ($action == 'delete-event') {
	 	$eventId = $_POST['eventId'];
	 	$sql = "DELETE from events WHERE id=$eventId";
		$result = mysqli_query($dbhandle, $sql);
		if ($result) {
			$responseArray = ["success" => true, "msg" => "Event Deleted successfully" ];
			echo json_encode($responseArray);
			die;
		} else{
			$responseArray = ["success" => false, "error" => "Something went wrong! Try again."];
			echo json_encode($responseArray);
			die;
		}
	}	

	if ($action == 'update-event') {
	 	$eventId = $_POST['eventId'];
	 	$topic = $_POST['topic'];
	 	$details = $_POST['details'];
	 	$event_range = $_POST['event_range'];
	 	$post_by = $_SESSION['name'];
	 	$sql = "UPDATE events SET topic = '$topic', details = '$details', event_range = '$event_range', post_by = '$post_by' WHERE id='$eventId'";
		$result = mysqli_query($dbhandle, $sql);
		if ($result) {
			$responseArray = ["success" => true, "msg" => "Event Updated successfully" ];
			echo json_encode($responseArray);
			die;
		} else{
			$responseArray = ["success" => false, "error" => "Something went wrong! Try again."];
			echo json_encode($responseArray);
			die;
		}
	}	



?>