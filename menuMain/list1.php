
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List</title>
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/list1.css">
	<link rel="stylesheet" href="../css/listP.css">
</head>
<body>
	<div id="windowModal">
		<div id="modalContainer">

		</div>
	</div>
	<p><button  onclick="window.location.href='menu.php'" class="back">Back</button></p>
	<div class="container">
	<div class="formDiv">
		<form>
			<input type="text"  id="search" name="search" onkeyup="searchMembers(this.value)" autocomplete="off" class="inputSearch">
		</form>
	<div id="tableContainer">
	<table>
		<tr>
			<th>CRM</th>
			<th>Full Name</th>
			<th>Position</th>
			<th>Specialty</th>
			<th>Edit</th></tr>

	<?php
			require("../dbconnect.php");
			require("../session.php");
		
			$sqlSelect = "SELECT a.crm, fullName, position, specialty FROM fmembers a LEFT JOIN membersinfo b ON a.crm = b.crm";
			$querySelect = mysqli_query($conn, $sqlSelect);
		
			if(mysqli_num_rows($querySelect) > 0){
				while ($row = mysqli_fetch_assoc($querySelect)) {
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
		</div>
		<div id="specificList">

		</div>
		</div>
	</div>
	
	<script type="text/javascript" src="../js/list.js"></script>
</body>
</html>


