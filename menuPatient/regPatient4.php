<?php
	require('../dbconnect.php');
	require('../session.php');

	$cpf = $_POST['cpf'];
	$fullname = $_POST['fullname'];
	$rg = $_POST['rg'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$convenant = $_POST['convenant'];

	if(isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }
	$birthday = $_POST['birthday'];
	$cep = $_POST['cep'];

	$sqlInfoPatient = "INSERT INTO patientinfo(`cpf`, `fullName`, `rg`, `phone`, `email`, `convenant`, `gender`, `date`, `cep`) VALUES
	(?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = mysqli_prepare($conn, $sqlInfoPatient);
    if(!$stmt){
        die("It's impossible prepare your query");
    }
    if(!mysqli_stmt_bind_param($stmt, "sssssssss", $cpf, $fullname, $rg, $phone, $email, $convenant, $gender, $birthday, $cep)){
	    die("It's not possible to link results");
    }
    if(!mysqli_stmt_execute($stmt)){
		die("Unable to search the Database!");
    }	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script h></script>
	<title>Successful</title>
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/regPatient4.css">
</head>
<body>
	<div class="container">
		<div class="txt">
			<h1>Your registration was a success!</h1>

			<button class="back" onclick="window.location.href='menuPatient.php'">Back</button>

		</div>
    </div>
</body>
</html>