<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        #displayUserMessage {
            align-item: center;
            max-width: 550px;
            /* background-color: red; */
            padding: 4px 2px 0px 5px;
            
        }
    </style>
</head>
<body>
    <?php 
        echo '<div class="activeUser">';
            echo '<p id="online">Online users</p>';
            while($usrrow = mysqli_fetch_assoc($usrresult)) {
                echo '<div id="user"></div>';
                echo '<p>'.$usrrow['username'].'</p>';
            }
        echo '</div>';
    ?>
    <?php
        echo '<div class="displayMessage">';
        while($row = mysqli_fetch_assoc($msgresult)) {
                $color = ($_SESSION['username'] == $row['username']) ? "rgb(0, 90, 8)" : "rgb(32, 28, 28)";
                $display = ($_SESSION['username'] == $row['username']) ? "visible" : "none";
                $flexDirection = ($_SESSION['username'] == $row['username']) ? "row-reverse" : "row";
                $margin = ($_SESSION['username'] == $row['username']) ? "" : "";
                
                echo '<div class="userMessage">';
                    echo '<form action="components/deleteMessage.php" method="post" style="flex-direction:'.$flexDirection.'">';
                        echo '<fieldset style="flex-direction:'.$flexDirection.'">';
                            echo '<legend style="background-color: '.$color.'; margin-left: '.$margin.';">'.$row['username'].'</legend>';
                            echo '<input type="hidden" name="msgSno" value="'.$row['sno'].'" id="">';
                            echo '<input type="hidden" name="msgMessage" value="'.$row['message'].'" id="">';
                            echo "<div id='displayUserMessage'>". $row['message'] ."</div>";
                            echo '<input type="image" src="img/delete.png" name="submit" style="display:'.$display.'"';
                        echo '</fieldset>';
                    echo '</form>';
                    
                echo '</div>';
            };
        echo '</div>';
    ?>
</body>
</html>