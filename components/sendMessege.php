<?php
    session_start();
    
    $username = $_SESSION['username'];
    $message = $_POST['message'];
    $toUser = ($_POST['toUser']) ? $_POST['toUser'] : "All";

    require 'connection/connectionFile.php';

    $query = "INSERT INTO `messages` (`username`, `message`,`toUser`) VALUES ('$username', '$message','$toUser')";
    $result= mysqli_query($conn, $query);
    if($result) {
        // header("Refresh:0; url=main/mainContainer.php");
        header("Location: ../main.php");
    }
    else {
        echo "<div style=' margin: 25px auto; width: 60%;'>";
        echo "<div style='text-align: center; font-size: 50px; color: red;'>
                Messgae can't send</div>";
        echo "<h2 style='text-align: center; color: lightpink;'>Either Message formate is wrong <br> OR <br> Invalid Message</h2>";
        echo "<a href='../main.php' style='text-align: center; display: block; text-decoration: none; font-size: large;'>
                 Send Again</a>";
        echo "<marquee><p style='color: blue; font-weight: bold;'>This type of message is not allow to send.<p></marquee>";
        echo "</div>";
    }
?>
