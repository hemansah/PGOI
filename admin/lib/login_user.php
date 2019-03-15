<?php
session_start();
include '../dbconfig/dbconnect.php';
$action = $_POST['action'];
	if ($action == 'login-form') {
	 	$username = $_POST['username']; 
	 	$password = $_POST['password'];
	 	$sql = "SELECT username, password,role FROM user_info WHERE username = '$username'";
		$result = mysqli_query($dbhandle, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($_POST['password'] == $row['password']) {
			$responseArray = ["success" => true, "role" => $row['role']];
			$_SESSION['name'] =$row['username'];
			$_SESSION['role'] = $row['role'];
			echo json_encode($responseArray);
			die;
		} else{
			$responseArray = ["success" => false, "error" => "Password or username doesn't match"];
			echo json_encode($responseArray);
			die;
		}
	}
?>