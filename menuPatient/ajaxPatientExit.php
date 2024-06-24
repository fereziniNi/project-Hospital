<?php
	require("../dbconnect.php");

	$cpf = $_GET['cpf'];

    $updatePatient = "UPDATE `screening` SET `exit`= CURRENT_TIMESTAMP  WHERE cpf = '$cpf'";
    $query = mysqlI_query($conn, $updatePatient);

?>
   <div class="edit-container">
        <div class="edit-formDiv">
            <h1 class="edit-titleH1">Edit Member</h1>
            <p>
                Your patient is out!
            </p>
        </div>
   </div>