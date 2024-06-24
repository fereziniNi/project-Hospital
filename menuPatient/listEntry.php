<?php  
	require("../dbconnect.php");
	require("../session.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List Screening</title>
	<link rel="stylesheet" href="../css/listP.css">
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/listEntry.css">
</head>
<body>
	<button  onclick="window.location.href='menuPatient.php'" class="back">Back</button>

	<div class="container">
		<div class="formDiv">
			<form>
				<span class="title">Risk Rating</span> 
				<select name="risk" class="inputSelect" onchange="searchEntry(this.value)">
					<option disabled selected></option>
					<option disabled>SELECT THE RISK</option>
					<option value="emerging" class="emerging">Emerging</option>
					<option value="urgent" class="urgent">Urgent</option>
					<option value="notVeryUrgent" class="notVeryUrgent">Not very urgent</option>
					<option value="notUrgent" class="notUrgent">Not urgent</option>
				</select>
			</form>
			<div id="tableContainer">
				<br>
				<table>
					<tr>
						<th>CPF</th>
						<th>Entry Time</th>
						<th>Sector</th>
						<th>Risk</th>
						<th>Exit</th>
					</tr>
					<?php
					$sqlSelect = "SELECT cpf, entryTime, sector, risk FROM `screening` WHERE `exit` IS null;";
					$querySelect = mysqli_query($conn, $sqlSelect);

					if(mysqli_num_rows($querySelect) > 0){
						while ($row = mysqli_fetch_assoc($querySelect)) {
							$cpf = $row['cpf'];
							$entryTime = $row['entryTime'];
							$timestamp = strtotime($entryTime);
							$timestamp = date('H:i:s d-m-Y', $timestamp);
							$sector = $row['sector'];
							$risk = $row['risk'];
							echo "<tr>";
							echo "<td> $cpf </td>";
							echo "<td> $timestamp </td>";
							echo "<td> $sector</td>";
							echo "<td> $risk</td>";
							echo "<td>
								<button id='btnModal' data-user-id='$cpf'><img src='../css/img/exit.png' alt='Edit'></button>
							</td>";
							echo "</tr>";
						}
					}
					?>
				</table>
			</div>

			<div id="filterTable">
			</div>

			<div id="windowModal">
				<div id="modalContainer"></div>
			</div>

			<script src="../js/listEntry.js"></script>
		</div>
	</div>
</body>
</html>
