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
            <div class="form-main">
                <p id="heading">Login To Group chat</p>
                <div class="dataField">
                    <div class="email">
                        <p id="label">Email</p>
                        <input type="text" name="email" id="email" autofocus spellcheck="true">
                    </div>
                    <div class="password">
                        <p id="label">Password</p>
                        <input type="password" name="password" id="password">
                    </div>
                </div>
            </div>
            <div class="btn">
                <input type="submit" value="Login" name="login" id="login-btn">
                <a href="signup.php">Don't have Account?</a>
            </div>
        </form>
    </div>
</body>
</html>