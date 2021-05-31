<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>SignUP</title>
</head>
<body>
    <?php
        $username_err = $email_err = "";
    ?>
    <div class="signup">
        <form action="components/submitRegestration.php" method="post">
            <p id="heading">SignUP for Group chat</p>
            <div class="username">
                <label for="">UserName</label> <br>
                <input type="text" name="username" id="username" required> <span style="color: red;"><?php echo $username_err; ?></span> <br> <br>
            </div>
            <div class="email">
                <label for="">Email-ID</label> <br>
                <input type="email" name="email" id="email" required> <span style="color: red;"> <?php echo $email_err; ?> </span> <br> <br>
            </div>
            <div class="password">
                <label for="">Password</label> <br>
                <input type="password" name="password" id="password" required> <br> <br>
            </div>
            <div class="btn">
                <input type="submit" value="Submit" name="submit" id="save-btn">
                <input type="reset" value="Reset" id="reset-btn">
            </div>
            <a href="login.php">Alread have an Account?</a>
        </form>
    </div>
    <!-- <?php
        if(isset($_POST['submit'])) {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            
            $conn = mysqli_connect("localhost", "root", "", "live chatting");
            $msg = "SELECT username, email FROM `userlogins`";
            $result= mysqli_query($conn, $msg);
            $checkEmail = $checkUsername = 0;
            while($row = mysqli_fetch_assoc($result) ) {
                if($username == $row['username']) $checkUsername++;
                if($email == $row['email']) $checkEmail++; 
            }
            echo "user";
            echo $checkUsername." ".$checkEmail;
            if($checkUsername == 0 && $checkEmail == 0) {
                session_start();
                $_SESSION['newUsername'] = $username;
                $_SESSION['newEmail'] = $email;
                $_SESSION['newPassword'] = $password;
                echo "redirect";
                // header("Location: components/submitRegestration.php");
            } else {
                echo "not redirect";
                if($checkUsername > 0) $username_err = "UserName Alredy exist";
                if($checkEmail > 0) $email_err = "Email already exist user another email";
                echo $username_err." ".$email_err;

                echo $_SESSION['newUsername']."<br>";
                echo $_SESSION['newEmail']."<br>";
                echo $_SESSION['newPassword']."<br>";
            }
        }
    ?> -->
</body>
</html>