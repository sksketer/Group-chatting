<?php
    $email = $_POST["email"]; 
    $password = $_POST["password"];
    
    require 'connection/connectionFile.php';
    $sql= "SELECT * FROM `userlogins`";
    $result=mysqli_query($conn,$sql);

    $checkemailis=$checkpasswordis=0;
    $username="";
    
    while($row=mysqli_fetch_assoc($result)) {
        if($row['email'] == $email) {
            $checkemailis++;
            if(md5($password) == $row['password']) {
                $checkpasswordis++;
                $username=$row['username'];
                $user = $row['userType'];
                $sno = $row['sno'];
                mysqli_query($conn, "UPDATE `userlogins` SET `status` = 'online' WHERE `userlogins`.`sno` = '$sno'");
            }
        }
    }

    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['sno'] = $sno;

    if($checkemailis > 0 && $checkpasswordis > 0) header("Location: ../main.php");
    else if($checkemailis > 0 && $checkpasswordis == 0) echo "Password Not Matched";
    else echo "<div class='userNotFound'><p>user not found</p>"."<a href='signup.php'>create new account</a></div>";
    
?>
