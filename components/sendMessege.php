<?php
    session_start();

    $username = $_SESSION['username'];
    $message = $_POST['message'];

    $conn = mysqli_connect("localhost", "root", "", "live chatting");

    $query = "INSERT INTO `messages` (`username`, `message`) VALUES ('$username', '$message');";
    $result= mysqli_query($conn, $query);

    if($result)
        header("Location: ../main.php");
    else
        echo "Messgae can't send";
?>
