<?php
    require('../session.php');
    require('../dbconnect.php');
    $crm = $_SESSION['crm'];    
    
    $sqlVerify = "SELECT * FROM membersinfo LEFT JOIN fmembers ON membersinfo.crm = fmembers.crm WHERE membersinfo.crm = $crm";
    $queryVerify = mysqli_query($conn, $sqlVerify);
    $fetchVerify = mysqli_fetch_assoc($queryVerify);
    $position = $fetchVerify['position'];
    $fullName = $fetchVerify['fullName'];
    $phone = $fetchVerify['phone'];
    $email = $fetchVerify['email']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacient Menu</title>
    <link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/profile.css">
</head>
<body>
<div class="navBar">
    <?php
        if($position == "Programmer"){
		    echo "<a href='../menuMain/menu.php' class='navButton'>Menu</a>"; 
            } 
    ?>
		<button type="button" onclick="window.location.href = '../menuPatient/menuPatient.php'" class="navButton">Pacient Menu</button>
		<button type="button" onclick="window.location.href = '../menuMain/aboutus.php'" class="navButton">About Us</button>
		<button type="button" onclick="window.location.href = '../menuMain/profile.php'" class="navButton">Profile</button>
		<button type="button" onclick="window.location.href = '../logout.php'" class="navButton">Exit</button>
	</div>
    
    <div class="container">
    <?php
        if($position == "Programmer"){
            echo "<div class='triangle-up-prog'></div>";
        }else{
            echo "<div class='triangle-up'></div>";
        }
    ?>
    <div class="optionsButtons">
        <?php echo "<header><h1>$fullName</h1></header>";
         echo "<div class='info'><h3>CRM ></h3><span>$crm</span></div>";
        echo "<div class='info'><h3>Email ></h3><span>$email</span></div>";
        echo "<div class='info'><h3>Phone ></h3><span>$phone</span></div>";
        echo "<div class='info'><h3>Position ></h3><span>$position</span></div>";
         ?>
    </div>
</body>
</html>