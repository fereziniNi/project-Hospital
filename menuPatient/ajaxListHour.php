<?php
    require("../dbconnect.php");
	$crm = $_GET['name'];
	$date = $_GET['date'];

    $availableHours = [];
    for ($hour = 7; $hour <= 18; $hour++) {
        if ($hour == 12) {
            continue;
        }
        if ($hour >= 12
         && $hour < 13) {
            continue;
        }
        $time = sprintf("%02d:00", $hour);
        $availableHours[] = $time;
        if ($hour != 18) {
            $time = sprintf("%02d:30", $hour);
            $availableHours[] = $time;
        }
    }

	$sqlHourDoctor = "SELECT TIME_FORMAT(hour, '%H:00') AS hour FROM consultation WHERE crm = '$crm' AND dt = '$date'";
    $result = mysqli_query($conn, $sqlHourDoctor);
    $occupiedHours = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $occupiedHours[] = $row['hour'];
    }
    $freeHours = array_diff($availableHours, $occupiedHours);
    ?>
    <form action="regAppointment3.php" method="post">
        <select name="hourSelect" id="hourSelect" class="selectH">
            <?php
                foreach ($freeHours as $hour) {
                    echo "<option name='hour' value='$hour'>$hour</option>";
                }
            ?>
        </select>
        <input type="hidden" name="crm" id="crm" value="<?php echo $crm; ?>">
        <input type="hidden" name="dt" id="dt" value="<?php echo $date; ?>">
        <button class="submitH">Send</button>
    </form>