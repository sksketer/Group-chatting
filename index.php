<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginPage.css">
    <title>Live Chat Login</title>
</head>
<body>
    <div class="main">
        <form action="components/checkLogin.php" method="post">
            <div class="dataField">
                <div class="email">
                    <p>Email</p>
                    <input type="text" name="email" id="email" autofocus spellcheck="true">
                </div>
                <div class="password">
                    <p>Password</p>
                    <input type="password" name="password" id="password">
                </div>
            </div>
            <div class="btn">
                <input type="submit" value="Login" name="login" id="login-btn">
            </div>
        </form>
    </div>
</body>
</html>