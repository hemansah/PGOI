<?php
	session_start();
	if (isset($_SESSION['name'])) {
		$session_name = $_SESSION['name'];
	} else{
		header("location:index.php");
	}
?>