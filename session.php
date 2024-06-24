<?php
	session_start();
	if(!isset($_SESSION['crm'])){
		header("Location: index.php");
		exit();
	}

?>