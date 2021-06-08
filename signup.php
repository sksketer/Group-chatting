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
                <label for="psw">Password</label> <br>
                <input type="password" name="password" id="password" 
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                required> <br> <br>
            </div>
            <div class="btn">
                <input type="submit" value="Submit" name="submit" id="save-btn">
                <input type="reset" value="Reset" id="reset-btn">
            </div>
            <a href="login.php">Alread have an Account?</a>
        </form>

    </div>

    <script>
        var myInput = document.getElementById("password");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {  
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }
        
        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {  
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {  
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }
        
        // Validate length
        if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
        }
    </script>

</body>
</html>