<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    
    require 'connection/connectionFile.php';
    $sno = $_SESSION['sno'];
    //change the status of user from 'online' to 'offline'
    mysqli_query($conn, "UPDATE `userlogins` SET `status` = 'offline' WHERE `userlogins`.`sno` = '$sno'");
    
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    header("Location: ../index.php");
    ?>
</body>
</html>
