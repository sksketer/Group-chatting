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
    $msg = "SELECT * FROM `messages`";
    $result= mysqli_query($conn, $msg);
?>
    <div class="container">
        <?php require 'components/navigationBar.php';?>
        <div class="main">
            <?php
                echo '<div class="displayMessage">';
                    while($row = mysqli_fetch_assoc($result) ) {
                        $flexDirection = ($_SESSION['username'] == $row['username']) ? "row-reverse" : "row";
                        $color = ($_SESSION['username'] == $row['username']) ? "orange" : "yellow";

                        echo '<div class="userMessage" style="flex-direction: '.$flexDirection.'">';
                            echo '<span id="user" style="background: '.$color.'">';
                                echo '<name>' . $row['username'] . ' </name>';
                            echo '</span>';
                            echo '<span id="msg-container">';
                            echo '    <div id="msg">';
                            echo  $row['message'];
                            echo '    </div>';
                            echo '</span>';
                            echo "<br>";
                        echo '</div>';
                    };
                echo '</div>';
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