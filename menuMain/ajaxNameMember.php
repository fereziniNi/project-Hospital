	<table>
		<tr>
			<th>CRM</th>
			<th>Full Name</th>
			<th>Position</th>
			<th>Specialty</th>
			<th>Edit</th></tr>

	<?php
require("../dbconnect.php");

$crm = $_GET['crm'];


        $selectAlter = "SELECT a.crm, fullName, position, specialty FROM fmembers a LEFT JOIN membersinfo b ON a.crm = b.crm WHERE a.crm LIKE '%$crm';";
        $querySelectAlter = mysqli_query($conn, $selectAlter);

			if(mysqli_num_rows($querySelectAlter) > 0){
				while ($row = mysqli_fetch_assoc($querySelectAlter)) {
					$crm = $row['crm'];
					$fullName = $row['fullName'];
					$position = $row['position'];
					$specialty = $row['specialty'];
					
					echo"<p>";

					echo "<tr>";
					echo "<td> $crm </td>";
					echo "<td> $fullName </td>";
					echo "<td> $position</td>";
					echo "<td> $specialty</td>";
					echo "<td class='tdBtn'>
						<button id='btnModal' data-user-id='$crm'><img src='../css/img/edit.png' alt='Edit'></button>
					  </td>
					</tr>";
				}
			}
	?>
	</table>