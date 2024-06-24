<?php
    require("dbconnect.php");
    $crm = $_POST['crm'];
    $password = $_POST['password'];

    $sqlSelect = "SELECT fullName, password, position FROM fmembers WHERE crm = ?";
    $stmt = mysqli_prepare($conn, $sqlSelect);

    if(!$stmt){
        $error = "Error in system!! Contact the support.";
    }
    elseif(!mysqli_stmt_bind_param($stmt, "s", $crm)){
        $error = "It's not possible to link results";
    }
    elseif (!mysqli_stmt_execute($stmt)) {
        $error = "Unable to search the Database!";
    }
    else {
        if (!mysqli_stmt_bind_result($stmt, $fullName, $criptoPassword,$position)) {
            $error = "Unable to link results";
        }
        else {
            $fetch=mysqli_stmt_fetch($stmt);
            if(!$fetch){
                $error = "Invalid CRM and Password combination!";
            }
            elseif($fetch == null){
                $error = "Invalid CRM and Password combination!";
            }
            else{
                require("cryptography.php");
                if(!checkPassword($password, $criptoPassword)){
                    $error = "Invalid CRM and Password combination.";
                }
                else{
                    //Start Session
                    session_start();
                    $_SESSION['crm'] = $crm;
                    ob_clean();
                    header("Location: menuMain/menu.php");
                    exit();
                }
            }
        }
    }
    if(isset($error)){
        header("Location: index.php?error=" . urlencode($error));
        exit();
    }
?>
