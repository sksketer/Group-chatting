<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
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
</body>
</html>