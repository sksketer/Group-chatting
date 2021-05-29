<?php
    $servername = "localhost";
    $username = "root";
    $connection_password = "";
    $database = "live chatting";

    $email = $_POST["email"]; 
    $password = $_POST["password"]; 
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $connection_password, $database);
    
    $sql= "SELECT * FROM `userlogins` WHERE email = $email AND password = md5($password)";
    $result=mysqli_query($conn,$sql);

    $checkemailis=$checkpasswordis=0;
    $username="";
    
    if(isset($_POST["email"], $_POST["password"])) 
    {
        while($row=mysqli_fetch_assoc($result))
        {
            if($row['email'] == $email)
            {
                $checkemailis++;
                if($password == md5($row['password']))
                {
                    $checkpasswordis++;
                    $username=$row['username'];
                    $user = $row['userType'];
                }
            }
        }

        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        if($checkemailis > 0 && $checkpasswordis > 0) {
            echo "You are normal user";
            header("Location: ../index.php");
        }
        else if($checkemailis > 0 && $checkpasswordis == 0) {
            echo "Password Not Matched";
        } else {
            echo "<div class='userNotFound'><p>user not found</p>"."<a href='signup.php'>create new account</a></div>";
        }
    }
?>