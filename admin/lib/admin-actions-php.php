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
	 	$sql = "UPDATE notification SET topic = '$topic', details = '$details', status = '$status' WHERE id=$noticeId";
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


?>