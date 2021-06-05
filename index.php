<?php

    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "live chatting";

    $conn = mysqli_connect($dbServer, $dbUser, $dbPassword);
    if($conn) echo ""; else die("Connection failed: " . $conn->connect_error);

    $createNewDb = "CREATE DATABASE `".$dbName."`";
    $checkDB = mysqli_query($conn, $createNewDb);
    if($checkDB) {
        $createTableMessage = "CREATE TABLE `".$dbName."`.`messages` (
            `sno` int(250) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `username` varchar(32) NOT NULL,
            `message` varchar(150) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

        $createTableUserLogins = "CREATE TABLE `".$dbName."`.`userlogins` (
            `sno` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `ID` varchar(10) NOT NULL,
            `username` varchar(20) DEFAULT NULL,
            `email` varchar(35) DEFAULT NULL,
            `password` varchar(32) DEFAULT NULL,
            `status` varchar(10) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        
        $checkMsg = mysqli_query($conn, $createTableMessage);
        $checkUsr = mysqli_query($conn, $createTableUserLogins);
    }

    session_start();
    $username = $_SESSION['username'];
    if($username == "") {
        header("Location: login.php");
    }
    else {
        header("Location: main.php");
    }
?>