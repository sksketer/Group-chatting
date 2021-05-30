<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Nav-Bar</title>
</head>
<body>
<?php 
    echo '<div class="nav">';
    echo '    <P id="logo"><img src="img/logo.png" alt="Logo Not Found" width="75px"></P>';
    echo '    <p id="heading">Live Chatting</p>';
    echo '    <p id="login"><span id="username">'.$_SESSION['username'].'</span><a href="components/sessionOut.php"> Logout </a></p>';
    echo '</div>';
?>
</body>
</html>