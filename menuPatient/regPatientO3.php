<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Patient</title>
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/regPatient3.css">
</head>
<body>
<?php
	require('../session.php');
	require('../dbconnect.php');
?>
<button class="back" onclick="window.location.href='menuPatient.php'">Back</button>
<div class="container">
	<div class="formDiv">
		<h2 class="titleH1">Register Patient</h2>
		<form method="post" action="regPatient4.php" autocomplete="off">
			<div class="formGroup">
				<label for="cpf">CPF</label>
				<input type="text" name="cpf" id="cpf" maxlength="11" required size="11" class="inputField">
				<label for="fullname">Full name</label>
				<input type="text" name="fullname" id="fullname" maxlength="50" required class="inputField">
			</div>
			
			<div class="formGroup">
				<label for="rg">RG</label>
				<input type="text" name="rg" id="rg" maxlength="9" required class="inputField">
				<label for="phone">Phone</label>
				<input type="text" name="phone" id="phone" maxlength="11" required class="inputField">
			</div>
			
			<div class="formGroup">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" maxlength="50" required class="inputField">
				<label for="cep">CEP</label>
				<input type="text" name="cep" id="cep" maxlength="8" required class="inputField">
			</div>
			
			<div class="formGroup">
				<label for="convenant">Convenant</label>
				<select name="convenant" id="convenant" class="inputField">
					<option value="amil">Amil</option>
					<option value="bradesco">Bradesco</option>
					<option value="omint">Omint</option>
					<option value="porto">Porto Seguro</option>
					<option value="sulamerica">SulAmérica</option>
					<option value="unimed">Unimed</option>
				</select>
			</div>
			
			<div class="formGroup">
				<label>Gender</label>

					<input type="radio" name="gender" value="male" class="radioButtonM"><span class="M">Male</span>
					<input type="radio" name="gender" value="female" class="radioButtonF"><span class="F">Female</span>
				</div>


			<div class="formGroup">
				<label for="birthday">Birthday</label>
				<input type="date" name="birthday" id="birthday" required class="inputField">
			</div>
				
			<button type="submit" class="submit">Sign Up</button>
		</form>
	</div>
</div>

</body>
</html>
