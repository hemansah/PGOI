<?php 
	session_start();
	include '../dbconfig/dbconnect.php';

	$action = $_POST['action'];
	/*Action for Notification form*/
	if ($action == 'notice-form') {
	 	$topic = $_POST['topic']; 
	 	$details = $_POST['details'];
	 	$post_by = $_SESSION['name'];
	 	$sql = "INSERT INTO notification(topic, details,status,post_by) VALUES('$topic','$details','active','$post_by')";
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


?>