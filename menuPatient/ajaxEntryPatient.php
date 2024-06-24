<table>
	<tr>
        <br>
		<th>CPF</th>
		<th>Entry Time</th>
		<th>Sector</th>
		<th>Risk</th>
		<th>Exit</th>
	</tr>
	<?php
	$risk = $_GET['risk'];
	require("../dbconnect.php");
	$sqlSelect = "SELECT * FROM `screening` WHERE risk = '$risk' AND `exit` IS null;";
	$querySelect = mysqli_query($conn, $sqlSelect);

	if(mysqli_num_rows($querySelect) > 0){
		while ($row = mysqli_fetch_assoc($querySelect)) {
			$cpf = $row['cpf'];
			$entryTime = $row['entryTime'];
			$sector = $row['sector'];
			$risk = $row['risk'];
			$timestamp = strtotime($entryTime);
			$timestamp = date('H:i:s d-m-Y', $timestamp);
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
