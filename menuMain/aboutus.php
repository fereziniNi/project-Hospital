<?php
    require('../session.php');
    require('../dbconnect.php');
    $crm = $_SESSION['crm'];    
    
    $sqlVerify = "SELECT position FROM fmembers WHERE crm = '$crm'";
    $queryVerify = mysqli_query($conn, $sqlVerify);
    $fetchVerify = mysqli_fetch_assoc($queryVerify);
    $position = $fetchVerify['position'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacient Menu</title>
    <link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/aboutus.css">
</head>
<body>
<div class="navBar">
    <?php
        if($position == "Programmer"){
		    echo "<a href='../menuMain/menu.php' class='navButton'>Menu</a>"; 
            } 
    ?>
		<button type="button" onclick="window.location.href = '../menuPatient/menuPatient.php'" class="navButton">Pacient Menu</button>
		<button type="button" onclick="window.location.href = '../menuMain/aboutus.php'" class="navButton">About Us</button>
		<button type="button" onclick="window.location.href = '../menuMain/profile.php'" class="navButton">Profile</button>
		<button type="button" onclick="window.location.href = '../logout.php'" class="navButton">Exit</button>
	</div>
    
    <div class="container">
    <?php
        if($position == "Programmer"){
            echo "<div class='triangle-up-prog'></div>";
        }else{
            echo "<div class='triangle-up'></div>";
        }
    ?>
    <div class="optionsButtons">
        <header>
            <h1>
                About Us
            </h1>
        </header>
        <div class="about">
            <h2 class="minTitle">Welcome to the Ferezini Hospital System!</h2>
            <p>
            The Ferezini System is an innovative platform designed to streamline hospital management and enhance the experience for both patients and healthcare professionals.
            Here, you can schedule appointments, perform triage entries, and manage member and doctor data with ease and security.
            </p>
            <h3>Our Mission</h3>
            <p>
            Inspired by the long-standing tradition of service and care in the Ferezini family, our goal is to provide an efficient and intuitive solution that meets the needs of hospitals and clinics. With family members working as doctors, nurses, physiotherapists, and psychologists, we have a deep understanding of the daily challenges in healthcare. This system was created with the vision of becoming an indispensable tool for healthcare institutions, contributing to more organized and effective patient care.
            </p>
            <h3>Features</h3>
            <li>
                <span>Appointment Scheduling: </span>Book appointments quickly and easily.
            </li>
            <li>
                <span>Triage Entry: </span>Record and manage patient triage information.
            </li>
            <li>
            <span>Member and Doctor Management: </span> Comprehensive CRUD (Create, Read, Update, Delete) system to manage the data of healthcare professionals and patients.
            </li>
        </div>
    </div>
</body>
</html>