<?php  
	require("../dbconnect.php");
	require("../session.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/reg1.css">
</head>
<body>
	<button  onclick="window.location.href='menu.php'" class="back">Back</button>
	<div class="container">
		<div class="formDiv">	
		<form name="reg01" method="POST" action="reg2.php">
			<h1 class="titleH1">Register Employees</h1>
				<div class="inputDiv">
				CRM <input required type="text" name="crm" maxlength="5" size="5" value="" class="inputForm" autocomplete="off"><br>
				Full Name
				<input required type="text" name="fullName" maxlength="150" size="15" value="" class="inputForm" autocomplete="off"><br>
				Phone
				<input required type="phone" name="phone" size="14" maxlength="13" value="" class="inputForm" autocomplete="off"><br>
				Email
				<input required type="email" name="email" size="25" value="" class="inputForm" autocomplete="off"><br>
				Password
				<input required type="password" name="password" maxlength="50" size="14" value="" class="inputForm"><br>
				Position
				<input type="text" name="position" maxlength="14" value="" size="14" class="inputForm"><br>
				Specialty
				<input required type="text" name="specialty" size="14" value="" class="inputForm"><br>
				Convenant
				<input required type="text" name="convenant" size="14" value="" class="inputForm"> <br>
				</div>

				<input type="submit" name="send" value="Register" class="submitInput">
			<div class="error">

			</div>
		</form>
		</div>

		<div>
			<img src="../css/img/doctorReg.jpg" alt="">
		</div>
	</div>
</body>
</html>