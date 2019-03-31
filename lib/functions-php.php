<?php
	function all_notifications($dbhandle){
		$query = "SELECT * FROM notification ORDER BY date_time";
		$result = mysqli_query($dbhandle, $query);
		return $result;
	}
	function all_events($dbhandle){
		$query = "SELECT * FROM events ORDER BY date_time";
		$result = mysqli_query($dbhandle, $query);
		return $result;
	}
?>