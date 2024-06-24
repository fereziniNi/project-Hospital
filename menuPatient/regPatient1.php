<?php  
    require('../session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Register</title>
    <link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/regPatient1.css">
</head>
<body>
    <button class="back" onclick="window.location.href='menuPatient.php'">Back</button>
    <div class="container">
	    <div>
		    <img src="../css/img/ambulance.jpg" alt="">
		</div>    
        
        <div class="formDiv">
            <h2>Screening</h2>
                <form method="post" action="regPatient2.php" autocomplete="off">
        <span class="title">CPF</span>
        <input type="char" name="cpf" maxlength="11" required class="inputCpf">
        
        <span class="title">Risk Rating</span> 
        <select name="risk" class="inputSelect">
            <option disabled selected></option>
            <option disabled>SELECT THE RISK</option>
            <option value="emerging" class="emerging">Emerging</option>
            <option value="urgent" class="urgent">Urgent</option>
            <option value="notVeryUrgent" class="notVeryUrgent">Not very urgent</option>
            <option value="notUrgent" class="notUrgent">Not urgent</option>
        </select>
        <br>
            <label class="priority">
                <input type="checkbox" name="Priority" value="yes" class="box">Priority Service
            </label>

            <input type="submit" value="Get Ticket" class="submit">

        </form>
        </div> 
    </div>  
</body>
</html>