<?php		
		require("../dbconnect.php");
		require("../session.php");
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    		if (isset($_POST['cpf']) && isset($_POST['specialty'])) {
		$cpf = $_POST['cpf'];
		$specialty = $_POST['specialty'];
		$sqlConvenant = "SELECT fullName, convenant FROM `patientinfo` WHERE cpf = '$cpf'";
		$queryConvenant = mysqli_query($conn, $sqlConvenant);
		$fechConvenant = mysqli_fetch_assoc($queryConvenant);
		$fullName = $fechConvenant['fullName'];
		$convenant = $fechConvenant['convenant'];	
		$_SESSION['cpf'] = $cpf;

		$selectConvenantDoctor = "SELECT crm, fullName FROM `fmembers` WHERE crm =(SELECT crm FROM membersinfo WHERE specialty = '$specialty' AND convenant = '$convenant')";
		$querySelectDoctor = mysqli_query($conn, $selectConvenantDoctor);

		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Appointment</title>
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/regAppointment2.css">
	
</head>
<body>
	<div class="container">
		<div class="form">
			<h2>Make a Consultation</h2>
			<select name="doctorName" id="selectDoctor">
					<option disabled selected>SELECT THE DOCTOR</option>
					<?php
						while ($fetchDoctor = mysqli_fetch_assoc($querySelectDoctor)) {
						$crm = $fetchDoctor['crm'];
						$doctorName = $fetchDoctor['fullName'];
						echo "<option value='$crm'>$doctorName</option>";
						}
					?>
				</select>
					<span>Choose the date</span>
					<input type="date" name="dateAppointment" id="date">
				<button onclick="searchHour()" class="submit" id="btn">See Hour</button>
				<div id="div-form-DoctorDate">

				</div>
		</div>
	</div>
</body>
</html>
		<?php } }?>
<script type="text/javascript" src="../js/searchDoctor.js"></script>