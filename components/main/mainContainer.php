<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .activeUser {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .activeUser #user {
            width: 5vh;
            height: 5vh;
            border-radius: 50%;
            background-color: rgb(255, 174, 0);
        }
        .activeUser p {
            margin-top: -3px;
            margin-left: -5px;
        }
    </style>
</head>
<body>
    <?php
        echo '<div class="displayMessage">';
            echo '<div class="activeUser">';
            echo '    <div id="user"></div>';
            echo '    <p>sketer</p>';
            echo '</div>';

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
</body>
</html>