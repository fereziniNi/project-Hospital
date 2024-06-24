<!DOCTYPE html>
<html lang="en-GB">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ferezini</title>
    <!--Css Links-->
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="containerBody">
		<div class="container-left">
			<h1 class="title">Welcome</h1>
			<p class="introduction">Web system for patient control at Ferezini hospital.</p>

				<form action="login.php" method="POST" name="formLogin" autocomplete="off" class="formDiv">
					<input type="text" name="crm" placeholder="Crm" required size="13" maxlength="11" oninvalid="this.setCustomValidity('Enter your CRM!')">
					<input type="password" name="password"placeholder="Password"  required oninvalid="this.setCustomValidity('Enter your password!')">
					<button type="submit" class="buttonLogin">LOGIN</button> 
				</form>
				<?php
					if(isset($_GET['error'])){
						$error = $_GET['error'];
						echo "<div class='errorDiv'>$error</div>";
					}
				?>
		</div>

		<div class="container-right">
			<img src="./css/img/hospital.png" alt="Hospital Image" class="hospitalImage">
		</div>
	</div>
</body>
</html>
