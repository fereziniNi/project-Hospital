<?php 
	require("../dbconnect.php");
	require("../session.php");

	$crm = $_SESSION['crm'];

	$sqlSecurity = "SELECT position FROM fmembers WHERE crm = '$crm'";
	$querySecurity = mysqli_query($conn, $sqlSecurity);
	$assocSecurity = mysqli_fetch_assoc($querySecurity);
	$answer = $assocSecurity['position'];

	if ($answer != "Programmer") {
		header('Location: ../menuPatient/menuPatient.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu Control</title>
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/menu.css">
</head>
<body>
	<div class="navBar">
		<button type="button" onclick="window.location.href='../menuMain/menu.php'" class="navButton">Menu</button>
		<button type="button" onclick="window.location.href = '../menuPatient/menuPatient.php'" class="navButton">Pacient Menu</button>
		<button type="button" onclick="window.location.href = '../menuMain/aboutus.php'" class="navButton">About Us</button>
		<button type="button" onclick="window.location.href = '../menuMain/profile.php'" class="navButton">Profile</button>
		<button type="button" onclick="window.location.href = '../logout.php'" class="navButton">Exit</button>
	</div>
	
	<div class="container">
		<div class="triangle-up"></div>
		<div class="optionsButtons">
			<div class="option">
				<button type="button" onclick="window.location.href = 'reg1.php'" class="btn-img"><img src="../css/img/registerMain.png" alt="Register"></button>
				<div class="description">
				<a href="reg1.php" class="linkPage">Register Members</a>
				<p class="descA">Registering doctors and staff at Ferezini hospital</p>
				</div>			
			</div>

			<div class="option">
			<button type="button" onclick="window.location.href = 'list1.php'" class="btn-img"><img src="../css/img/listPeople.png" alt="List"></button>
			<div class="description">
				<a href="list1.php" class="linkPage">List Members</a>
				<p class="descA">List of doctors and staff  at Ferezini hospital</p>
			</div>
		</div>
	</div>
</body>
</html> 