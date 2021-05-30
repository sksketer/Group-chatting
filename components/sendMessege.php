<?php
    session_start();
    
    $username = $_SESSION['username'];
    $message = $_POST['message'];

    require 'connection/connectionFile.php';

    $query = "INSERT INTO `messages` (`username`, `message`) VALUES ('$username', '$message');";
    $result= mysqli_query($conn, $query);

    if($result) {
        // header("Refresh:0; url=main/mainContainer.php");
        header("Location: ../main.php");
    }
    else
        echo "Messgae can't send";
?>
