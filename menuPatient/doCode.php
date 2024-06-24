<?php  
	function CreatCode($risk, $priority){
		$state = "SP";
		$region = "19";

		if ($risk == "emerging") {
			$risk = "E";
		} elseif ($risk == "urgent") {
			$risk = "U";
		} elseif($risk == "notVeryUrgent"){
			$risk = "NVU";
		} else{
			$risk = "NU";
		}

		if ($priority == "priority") {
			$priority = "P";	
		} else{
			$priority = "DP";
		}

		$day = date("d");

		$sql = "SELECT * FROM screening ORDER BY entryTime DESC;";
		require("../dbconnect.php");
		$query = (mysqli_query($conn, $sql));
		$row = mysqli_num_rows($query);
		if ($row == null){
			$call = 1;	
		} else{
			$fetch = mysqli_fetch_assoc($query);
			$call = $fetch['ticket'];
			$call = substr($call, -1);
			$call = $call + 1;
		}
			$ticket = $state . $region . $risk . $priority . $day.  $call;

		return $ticket;

	}
?>