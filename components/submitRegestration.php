<?php
    $conn = mysqli_connect("localhost", "root", "", "live chatting");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $id = "";


    if($conn) {
        $insertQuery = "INSERT INTO `userlogins` (`ID`, `username`, `email`, `password`) 
                        VALUES ('$id', '$username', '$email', '$password')";
        
        $result= mysqli_query($conn, $insertQuery);
        if($result) {
            echo '<div style="color: lightgreen; text-align: center; font-weight: bolder; margin: 12px 0px;">';
            echo "Regestration completed"."&nbsp;";
            echo "You Need To sign-IN ";
            echo '<a href="../login.php" style="color: skyblue;">Sign IN</a>';
            echo '</div>';
        } else
            echo "<div style='color:red; text-align: center; margin: 20px; font-size: larger;'>Error in Regestration. </div>";

    } else {
        echo '<h1 style="color:red"> CantNot Commected to server. <a href="../signup.html">Try Again</a> </h1>';
    }


?>