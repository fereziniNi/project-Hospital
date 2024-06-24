<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Make a Consultation</title>
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/regAppointment1.css">
</head>
<body>
	<button class="back" onclick="window.location.href='menuPatient.php'">Back</button>
	<div class="container">
		<form method="post" action="regAppointment2.php" id="startingAppointment">
			<h3>Make a Consultation</h3>	
				<span>CPF</span> <input type="text" name="cpf" size="11" maxlength="11" autocomplete="off">
				<span>Consultation or examination</span>
				<select name="specialty" id="specialty">
					<option disabled selected>-- Specialty --</option>
					<option value="cardiology">Cardiology</option>
					<option value="dermatology">Dermatology</option>
					<option value="gynecology">Gynecology</option>
					<option value="infectious">Infectious Diseases</option>
					<option value="ophthalmology">Ophthalmology</option>
					<option value="orthopedics">Orthopedics</option>
					<option value="pediatrics">Pediatrics</option>
				</select> 
		<input type="submit" value="Consult" class="submit">
		</form>
	<div>
</body>
</html>