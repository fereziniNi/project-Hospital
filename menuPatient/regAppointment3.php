<?php
    require("../dbconnect.php");
    require("../session.php");

    $hour = $_POST['hourSelect'];
    $crm = $_POST['crm'];
    $dt = $_POST['dt'];
    $cpf = $_SESSION['cpf'];

    $sqlInsertAppointment = "INSERT INTO `consultation`(`cpf`, `crm`, `dt`, `hour`) VALUES ('$cpf','$crm','$dt','$hour')";
    $queryInsert = mysqli_query($conn, $sqlInsertAppointment);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script h></script>
	<title>Successful</title>
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/regAppointment3.css">
</head>
<body>
	<div class="container">
		<div class="txt">
			<h1>Your appointment was a success!</h1>
            <span>Date
                <?php echo $dt;
                echo "<br>"; echo $hour; ?>
            </span>
			<button class="back" onclick="window.location.href='menuPatient.php'">Back</button>

		</div>
    </div>
</body>
</html>