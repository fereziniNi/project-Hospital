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
	<link rel="stylesheet" href="../css/menuPatient.css">
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
        <div class="option">
            <button type="button" onclick="window.location.href = 'regPatient1.php'" class="btn-img">
                <img src="../css/img/patientEntry.png" alt="Patient Entry">
            </button>
            <div class="description">
                <a href="regPatient1.php" class="linkPage">Patient Entry</a>
                <p class="descA">Beginning of the hospital screening process</p>
            </div>
        </div>

        <div class="option">
            <button type="button" onclick="window.location.href = 'regAppointment1.php'" class="btn-img">
                <img src="../css/img/makeConsultation.png" alt="Register">
            </button>
            <div class="description">
                <a href="regAppointment1.php" class="linkPage">Make a Consultation</a>
                <p class="descA">Beginning of the hospital screening process</p>
            </div>
        </div>

        <div class="option">
            <button type="button" onclick="window.location.href = 'listAppointment1.php'" class="btn-img">
                <img src="../css/img/listConsultation.png" alt="List Consultations">
            </button>
            <div class="description">
                <a href="listAppointment1.php" class="linkPage">List Consultations</a>
                <p class="descA">View all scheduled consultations</p>
            </div>
        </div>

        <div class="option">
            <button type="button" onclick="window.location.href = 'listEntry.php'" class="btn-img">
                <img src="../css/img/listEntry.png" alt="List Entry">
            </button>
            <div class="description">
                <a href="listEntry.php" class="linkPage">List Entry</a>
                <p class="descA">Hospital admission list</p>
            </div>
        </div>

        <div class="option">
            <button type="button" onclick="window.location.href = 'regPatientO3.php'" class="btn-img">
                <img src="../css/img/registerPatient.png" alt="Register">
            </button>
            <div class="description">
                <a href="regPatientO3.php" class="linkPage">Register</a>
                <p class="descA">Register new patient</p>
            </div>
        </div>

        <div class="option">
            <button type="button" onclick="window.location.href = 'listPatient1.php'" class="btn-img">
                <img src="../css/img/editPatient.png" alt="Edit">
            </button>
            <div class="description">
                <a href="listPatient1.php" class="linkPage">Edit Patient</a>
                <p class="descA">Edit patient details</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>