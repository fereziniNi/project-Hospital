<?php 
    require("../dbconnect.php");
    require("../session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Consultation</title>
    <link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/listAppointment1.css">
    <link rel="stylesheet" href="../css/ajaxNamePatient.css">
</head>
<body>
    <button class="back" onclick="window.location.href='menuPatient.php'">Back</button>
	<div class="container">
    <div class="form">
        <h3>Consult</h3>
        <span>Choose the date</span>
        <input type="date" name="dt" id="dt">
        <span>Put the crm</span>
        <input type="text" name="crm" id="crm" autocomplete="off" size="11">
        <input type="submit" value="Consult" class="submit" onclick="takeHour()">

    <div id="Calendar">
    </div>
    </div>
    <script type="text/javascript" src="../js/dateConsultation.js"></script>
</body>
</html>