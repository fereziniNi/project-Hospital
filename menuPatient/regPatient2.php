<?php
	require('../dbconnect.php');
	require('../session.php');

	$cpf = $_POST['cpf'];
	$risk = $_POST['risk'];
	if (isset($_POST['Priority']) && $_POST['Priority'] == "yes") {
        $priority = "priority";
    }else{
    	$priority = "default";
    }

	require("doCode.php");
	$ticket = CreatCode($risk, $priority);

	$sqlEnterHospital = "INSERT INTO screening(`ticket`, `cpf`,  `sector`, `risk`) VALUES
		(?, ?, ?, ?)";
	$stmt = mysqli_prepare($conn, $sqlEnterHospital);
	if(!$stmt){
		die("It's impossible prepare your query");
	}
	if(!mysqli_stmt_bind_param($stmt, "siss", $ticket, $cpf, $priority, $risk)){
		die("It's not possible to link results");
	}
	if(!mysqli_stmt_execute($stmt)){
			die("Unable to search the Database!");
	}


	$_SESSION['cpf'] = $cpf;

	$sqlSearchCPF = "SELECT i.cpf FROM screening p LEFT JOIN patientinfo i ON p.cpf = i.cpf WHERE i.cpf = '$cpf';";
	$querySearch = mysqli_query($conn, $sqlSearchCPF);
	$assoc = mysqli_fetch_assoc($querySearch);
	if($assoc == null){
		header('Location: regPatient3.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Screening</title>
</head>
<body>
<link rel="stylesheet" href="../css/default.css">
<link rel="stylesheet" href="../css/regPatient4.css">
	<div class="container">
		<div class="txt">
			<h1>Your Screening was a success!</h1>

			<button class="back" onclick="window.location.href='menuPatient.php'">Back</button>

		</div>
</body>
</html>