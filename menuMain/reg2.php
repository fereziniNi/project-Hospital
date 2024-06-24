	<?php
	require("../dbconnect.php");
	require("../session.php");
	
		$crm = $_POST['crm'];
		$fullName = $_POST['fullName'];
		$password = $_POST['password'];
		$position = $_POST['position'];
		$specialty = $_POST['specialty'];
		$convenant = $_POST['convenant'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];

		require("../cryptography.php");
		$criptoPassword = doPassword($crm, $password);

		$sqlInsert = "INSERT INTO fmembers(`crm`, `fullName`,  `password`, `position`) VALUES
		(?, ?, ?, ?)";

		$sqlInsert2 = "INSERT INTO membersinfo(`crm`, `specialty`,`convenant`, `phone`, `email`) VALUES
		(?, ?, ?, ?, ?)";

		$stmt = mysqli_prepare($conn, $sqlInsert);
		$stmt2 = mysqli_prepare($conn, $sqlInsert2);

		if(!$stmt & !$stmt2){
			die("It's impossible prepare your query");
		}
		if(!mysqli_stmt_bind_param($stmt, "ssss", $crm, $fullName, $criptoPassword, $position)){
			die("It's not possible to link results");
		}
		if(!mysqli_stmt_bind_param($stmt2, "sssss", $crm, $specialty, $convenant,$phone, $email)){
			die("It's not possible to link results");
		}

		if(!mysqli_stmt_execute($stmt)){
			die("Unable to search the Database!");
		}
		if(!mysqli_stmt_execute($stmt2)){
			die("Unable to search the Database!");
		}
?>

?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="stylesheet" href="../css/reg2.css">
	</head>
	<body>

			<div class="resultForm">
				<h2>Your registration is complete!</h2>
				<div class="postDiv">
					<?php
						echo "CRM: <span>$crm</span></br>
						Full Name <span>$fullName</span></br>
						Phone <span>$phone</span></br>
						Email <span>$email</span></br>
						Position <span>$position</span><br>
						Specialty <span>$specialty</span><br>
						Convenant <span>$convenant</span>
						"
					?>
				</div>
				<button  onclick="window.location.href='menu.php'" class="back">Back</button>
			</div>
	</body>
	</html>
