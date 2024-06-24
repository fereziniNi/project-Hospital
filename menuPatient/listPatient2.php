<?php  
	require("../dbconnect.php");

	$cpf = $_POST['cpf'];
	$fullName = $_POST['fullName'];
	$rg = $_POST['rg'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$convenant = $_POST['convenant'];
	$cep = $_POST['cep'];

	$sqlUpdate = "UPDATE `patientinfo` SET `fullName`=? ,`rg`=?,`phone`=?, `email`=?, `convenant`=?, `cep`=? WHERE cpf = ?";
	$stmt  = mysqli_prepare($conn, $sqlUpdate);

	if(!$stmt){
		die("It's impossible prepare your query");
	}

	if(!mysqli_stmt_bind_param($stmt, "sssssss", $fullName, $rg, $phone, $email, $convenant, $cep, $cpf)){
			die("It's not possible to link results");
	}

	if(!mysqli_stmt_execute($stmt)){
			die("Unable to search the Database!");
	}

	ob_clean();
	header("Location: listPatient1.php");
?>