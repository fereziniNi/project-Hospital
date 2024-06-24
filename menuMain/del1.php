<?php
	require("../dbconnect.php");
	$crm = $_POST["crm"];
	echo $crm;

	$sqlDelete =  "DELETE FROM `fmembers` WHERE crm = '$crm'";
	$sqlDelete2 = "DELETE FROM `membersinfo` WHERE crm = '$crm'";
	mysqli_query($conn, $sqlDelete);
	mysqli_query($conn, $sqlDelete2);

	ob_clean();
	header('Location: list1.php');
?>