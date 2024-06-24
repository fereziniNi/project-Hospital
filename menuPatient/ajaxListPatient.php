<?php
	require("../dbconnect.php");

	$cpf = $_GET['cpf'];


	$selectAlter = "SELECT * FROM patientinfo WHERE cpf = '$cpf'";
	$querySelectAlter = mysqli_query($conn, $selectAlter);

	$rowAlter = mysqli_fetch_assoc($querySelectAlter);
	$fullName = $rowAlter['fullName'];	
	$rg = $rowAlter['rg'];
	$phone	= $rowAlter['phone'];
	$email = $rowAlter['email'];
	$convenant = $rowAlter['convenant'];
	$convenant = isset($rowAlter['convenant']) ? $rowAlter['convenant'] : '';
	$cep = $rowAlter['cep'];

?>
	
   <div class="edit-container">
        <div class="edit-formDiv">
            <h1 class="edit-titleH1">Edit Member</h1>
            <form name='editMembers' action='listPatient2.php' method='post'>
                <div class="edit-inputDiv">
                    CPF <input type='text' name='cpf' value='<?php echo $cpf; ?>' class='edit-inputForm' readonly maxlength="10"><br>
                    Full Name <input type='text' name='fullName' value='<?php echo $fullName; ?>' class='edit-inputForm'><br>
                    RG <input type='text' name='rg' value='<?php echo $rg; ?>' class='edit-inputForm'><br>
                    Phone <input type='text' name='phone' value='<?php echo $phone; ?>' class='edit-inputForm'><br>
                    Email <input type='email' name='email' value='<?php echo $email; ?>' class='edit-inputForm' maxlength="30" size="30"><br>
					Convenant 
					<select name="convenant" id="convenant" class="edit-inputForm">
						<option value="amil" <?php echo ($convenant == 'amil') ? 'selected' : ''; ?>>Amil</option>
						<option value="bradesco" <?php echo ($convenant == 'bradesco') ? 'selected' : ''; ?>>Bradesco</option>
						<option value="omint" <?php echo ($convenant == 'omint') ? 'selected' : ''; ?>>Omint</option>
						<option value="porto" <?php echo ($convenant == 'porto') ? 'selected' : ''; ?>>Porto Seguro</option>
						<option value="sulamerica" <?php echo ($convenant == 'sulamerica') ? 'selected' : ''; ?>>SulAmérica</option>
						<option value="unimed" <?php echo ($convenant == 'unimed') ? 'selected' : ''; ?>>Unimed</option>
					</select>
					Cep <input type='text' name='cep' value='<?php echo $cep; ?>' class='edit-inputForm'><br>
                </div>
                <div class="edit-buttonContainer">
                    <input type='submit' name='send' value='Modify' class='edit-submitInput'>
            </form>
                    <form name='delMembers' action='del1.php' method='post'>
                            <input type='hidden' name='crm' value='<?php echo $cpf; ?>'>
                            <button type='submit' class='edit-deleteInput'>Delete</button>
                    </form>
                </div>
        </div>
    </div>