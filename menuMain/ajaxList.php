<?php
	require("../dbconnect.php");

	$crm = $_GET['crm'];


	$selectAlter = "SELECT * FROM fmembers a LEFT JOIN membersinfo b ON a.crm = b.crm WHERE a.crm = '$crm'";
	$querySelectAlter = mysqli_query($conn, $selectAlter);

	$rowAlter = mysqli_fetch_assoc($querySelectAlter);
	$fullName = $rowAlter['fullName'];	
	$position = $rowAlter['position'];
	$specialty	= $rowAlter['specialty'];
	$phone = $rowAlter['phone'];
	$email = $rowAlter['email'];
?>
	
   <div class="edit-container">
        <div class="edit-formDiv">
            <h1 class="edit-titleH1">Edit Member</h1>
            <form name='editMembers' action='list2.php' method='post'>
                <div class="edit-inputDiv">
                    CRM <input type='text' name='crm' value='<?php echo $crm; ?>' class='edit-inputForm' readonly maxlength="10"><br>
                    Password <input type='password' name='password' value='' placeholder='Password...' class='edit-inputForm'><br>
                    Full Name <input type='text' name='fullName' value='<?php echo $fullName; ?>' class='edit-inputForm'><br>
                    Position <input type='text' name='position' value='<?php echo $position; ?>' class='edit-inputForm'><br>
                    Specialty <input type='text' name='specialty' value='<?php echo $specialty; ?>' class='edit-inputForm'><br>
                    Phone <input type='text' name='phone' value='<?php echo $phone; ?>' class='edit-inputForm'><br>
                    Email <input type='email' name='email' value='<?php echo $email; ?>' class='edit-inputForm' maxlength="30" size="30"><br>
                </div>
                <div class="edit-buttonContainer">
                    <input type='submit' name='send' value='Modify' class='edit-submitInput'>
            </form>
                    <form name='delMembers' action='del1.php' method='post'>
                            <input type='hidden' name='crm' value='<?php echo $crm; ?>'>
                            <button type='submit' class='edit-deleteInput'>Delete</button>
                    </form>
                </div>
        </div>
    </div>