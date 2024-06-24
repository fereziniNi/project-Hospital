<?php
	$server="localhost";
	$user="root";
	$password=""; 
	$database="hospitalDatabase";

	if($conn = mysqli_connect($server, $user, $password, $database)){
		//echo "Running";
	} else{
		die("A problem has been identified");
	}
?>