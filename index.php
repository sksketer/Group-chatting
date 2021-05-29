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
    <div class="container">
        <?php require 'components/navigationBar.php';?>
        <div class="main">
            <div class="displayMessage">
                <div class="userMessage">
                    <span id="user"><name>username</name></span>
                    <span id="msg-container">
                        <div id="msg">
                            Hello what are you doing
                        </div>
                    </span>
                </div>
            </div>
            <div class="textMessage">
                <form action="" method="post">
                    <input type="text" name="message" id="message" placeholder="message" autocomplete="off" spellcheck="true">
                    <input type="submit" value="send" id="send-btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>