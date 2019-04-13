<?php
	function all_notifications($dbhandle){
		$query = "SELECT * FROM notification ORDER BY date_time DESC";
		$result = mysqli_query($dbhandle, $query);
		return $result;
	}
	function all_events($dbhandle){
		$query = "SELECT * FROM events ORDER BY event_range DESC";
		$result = mysqli_query($dbhandle, $query);
		return $result;
	}
	function all_buses($dbhandle){
		$query = "SELECT * FROM buses ORDER BY bus_number DESC";
		$result = mysqli_query($dbhandle, $query);
		return $result;
	}
	function bus_stops($dbhandle,$bus_number){
		$query = "SELECT * FROM bus_routes WHERE bus_number = $bus_number ORDER BY pick_time DESC";
		$result = mysqli_query($dbhandle, $query);
		return $result;
	}
?>