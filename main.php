<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>sk chat</title>
</head>
<body>
<?php
//    header("refresh: 2");
    $conn = mysqli_connect("localhost", "root", "", "live chatting");
    $usr = "SELECT username FROM `userlogins` WHERE status == 'Active'";
    $msg = "SELECT * FROM `messages`";
    $usrresulr = mysqli_query($conn, $usr);
    $msgresult= mysqli_query($conn, $msg);
?>
    <div class="container">
        <?php require 'components/navigationBar.php';?>
        <div class="main">
            <?php
                require 'components/main/mainContainer.php';
            ?>
            <div class="textMessage">
                <form action="components/sendMessege.php" method="post">
                    <input type="text" name="message" id="message" required placeholder="message" autocomplete="off" spellcheck="true">
                    <input type="submit" value="send" id="send-btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>