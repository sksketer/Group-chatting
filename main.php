
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
    require 'components/connection/connectionFile.php';
    $usr = "SELECT username FROM `userlogins` WHERE status = 'online'";
    $allUsr = "SELECT username FROM `userlogins`";
    $msg = "SELECT * FROM `messages`";
    $usrresult = mysqli_query($conn, $usr);
    $all_Usr = mysqli_query($conn, $allUsr);
    $msgresult = mysqli_query($conn, $msg);

    $allUser = array();
    
    while($allRow = mysqli_fetch_assoc($all_Usr)) {
        array_push($allUser, $allRow['username']);
    }
?>
    <div class="container">
        <?php require 'components/navigationBar.php';?>
        <div class="main">
            <div class="msg-section">
                <?php
                    require 'components/main/mainContainer.php';
                ?>
            </div>
            <div class="textMessage">
                <form action="components/sendMessege.php" method="post">
                    <input type="hidden" name="toUser">
                    <input list="selectUser" name="toUser" id="toUser" placeholder="Private Message" autocomplete="off"> 
                        <datalist id="selectUser">
                        <?php 
                            foreach ($allUser as $i)
                            echo '<option value="'.$i.'">';
                        ?>
                        </datalist>
                    <input type="text" name="message" id="message" required placeholder="message" autocomplete="off" spellcheck="true">
                    <input type="submit" value="send" id="send-btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>