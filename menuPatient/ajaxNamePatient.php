<table>
		<tr>
			<th>CPF</th>
			<th>Full Name</th>
			<th>RG</th>
			<th>Phone</th>
			<th>Edit</th></tr>
	
	<p>
	<?php
	$cpf = $_GET['cpf'];
		require("../dbconnect.php");
		$sqlSelect = "SELECT cpf, fullName, rg, phone FROM `patientinfo` WHERE cpf LIKE '%$cpf';";
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