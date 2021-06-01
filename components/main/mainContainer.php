<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .activeUser {
            display : inline;
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
        #delMsg {
            cursor: pointer;
            color: blue;
            background-color: #fff;
            border-radius: 20px;
            padding: 1px 3px;
            margin: 3px;
        }
    </style>
</head>
<body>
    <?php 
        echo '<div class="activeUser">';
            echo '<p id="online">Online users</p>';
            while($usrrow = mysqli_fetch_assoc($usrresult)) {
            echo '    <div id="user"></div>';
            echo '    <p>'.$usrrow['username'].'</p>';
            // echo '<p> username</p>';
            }
        echo '</div>';
    ?>
    <?php
        echo '<div class="displayMessage">';
            while($row = mysqli_fetch_assoc($msgresult)) {
                $flexDirection = ($_SESSION['username'] == $row['username']) ? "row-reverse" : "row";
                $color = ($_SESSION['username'] == $row['username']) ? "orange" : "yellow";
                $visibility = ($_SESSION['username'] == $row['username']) ? "visible" : "hidden";

                echo '<div class="userMessage" style="flex-direction: '.$flexDirection.'">';
                    echo '<span id="user" style="background: '.$color.'">';
                        echo '<name>' . $row['username'] . ' </name>';
                    echo '</span>';
                    echo '<span id="msg-container">';
                    echo '    <div id="msg">';
                            echo '<span id="delMsg" style="visibility: '.$visibility.'"> <a href="components/deleteMessage.php"><i class="fa fa-trash" aria-hidden="true"></i></a></span>';
                            $_SESSION['msgSno'] = $row['sno'];
                            $_SESSION['messageForDeleted'] = $row['message'];
                            echo  $row['message'];
                    echo '    </div>';
                    echo '</span>'; echo "<br>";
                echo '</div>';
            };
        echo '</div>';
    ?>
</body>
</html>