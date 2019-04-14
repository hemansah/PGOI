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
		$query = "SELECT * FROM bus_routes WHERE bus_number = $bus_number ORDER BY pick_time ASC";
		$result = mysqli_query($dbhandle, $query);
		return $result;
	}
	function bus_info($dbhandle,$bus_number){
		$query = "SELECT * FROM buses WHERE bus_number = $bus_number";
		$result = mysqli_query($dbhandle, $query);
		return $result;
	}
?>