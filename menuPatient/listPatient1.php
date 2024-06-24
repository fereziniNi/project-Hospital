<?php  
	require("../dbconnect.php");
	require("../session.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List</title>
	<link rel="stylesheet" href="../css/listP.css">
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/listPatient1.css">
</head>
<body>
	<button  onclick="window.location.href='menuPatient.php'" class="back">Back</button>

	<div class="container">
	<div class="formDiv">
	<form>
		<input type="text" id="search" name="search" onkeyup="searchPatient(this.value)" autocomplete="off" class="inputSearch" maxlength="11">
	</form>
	<div id="tableContainer">
	<table>
		<tr>
			<th>CPF</th>
			<th>Full Name</th>
			<th>RG</th>
			<th>Phone</th>
			<th>Edit</th></tr>
	
	<p>
		<?php
		$sqlSelect = "SELECT cpf, fullName, rg, phone FROM `patientinfo`";
		$querySelect = mysqli_query($conn, $sqlSelect);

		if(mysqli_num_rows($querySelect) > 0){
			while ($row = mysqli_fetch_assoc($querySelect)) {
				$cpf = $row['cpf'];
				$fullName = $row['fullName'];
				$rg = $row['rg'];
				$phone = $row['phone'];
				echo "<tr>";
				echo "<td> $cpf </td>";
				echo "<td> $fullName </td>";
				echo "<td> $rg</td>";
				echo "<td> $phone</td>";
	        	echo "<td>
	                <button id='btnModal' data-user-id='$cpf'><img src='../css/img/edit.png' alt='Edit'></button>
	              </td>
	            </tr>";
			}
		}
		?>
		</table>
		</div>

		<div id="specificList">

		</div>

		<div id="windowModal">
		<div id="modalContainer">

		</div>
		</div>

		<script src="../js/listPatient.js"></script>
</body>
</html>

