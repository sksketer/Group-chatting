<?php
    session_start();
    
    $username = $_SESSION['username'];
    $messege = $_POST['msgMessage'];
    $messSno = $_POST['msgSno'];

    require 'connection/connectionFile.php';


    if($messege == "This message is deleted.") 
        $query = "DELETE FROM `messages` WHERE `messages`.`sno` = '$messSno' AND `messages`.`username` = '$username'";
    else
        $query = "UPDATE `messages` SET `message` = 'This message is deleted.' WHERE `messages`.`sno` = '$messSno'";

    $result= mysqli_query($conn, $query);

    if($result) {
        // header("Refresh:0; url=main/mainContainer.php");
        header("Location: ../main.php");
    }
    else
        echo "Messgae can't Deleted.";
?>
