<?php  
	require("../dbconnect.php");

	$crm = $_POST['crm'];
	$fullName = $_POST['fullName'];
	$password = $_POST['password'];
	$position = $_POST['position'];
	$specialty = $_POST['specialty'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	if(!empty($password)){

	$sqlUpdate = "UPDATE `fmembers` SET `fullName`=? ,`password`=?,`position`=? WHERE crm = ?";
	$stmt  = mysqli_prepare($conn, $sqlUpdate);

	require("../cryptography.php");
	$criptoPassword = doPassword($crm, $password);

	if(!$stmt){
			die("It's impossible prepare your query");
	}

	if(!mysqli_stmt_bind_param($stmt, "ssss", $fullName, $criptoPassword, $position, $crm)){
			die("It's not possible to link results");
	}

	if(!mysqli_stmt_execute($stmt)){
			die("Unable to search the Database!");
	}

	}
	else{
		$sqlUpdate = "UPDATE `fmembers` SET `fullName`=? ,`position`=? WHERE crm = ?";
		$stmt  = mysqli_prepare($conn, $sqlUpdate);

		if(!$stmt){
			die("It's impossible prepare your query");
		}

		if(!mysqli_stmt_bind_param($stmt, "sss", $fullName, $position, $crm)){
				die("It's not possible to link results");
		}

		if(!mysqli_stmt_execute($stmt)){
				die("Unable to search the Database!");
		}
	}
	$sqlUpdate2 = "UPDATE `membersinfo` SET `specialty`=? ,`phone`=?,`email`=? WHERE crm = ?";
	$stmt2  = mysqli_prepare($conn, $sqlUpdate2);
	if(!$stmt2){
		die("It's impossible prepare your query");
	}

	if(!mysqli_stmt_bind_param($stmt2, "sisd", $specialty, $phone, $email, $crm)){
			die("It's not possible to link results");
		}
	if(!mysqli_stmt_execute($stmt2)){
		die("Unable to search the Database!");
	}



	ob_clean();
	header("Location: list1.php");
?>