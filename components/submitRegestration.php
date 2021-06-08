<?php
    require 'connection/connectionFile.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $id = "";
    $selectEmailQuery = "SELECT email FROM `userlogins`";
    $emailResult = mysqli_query($conn, $selectEmailQuery);
    if($emailResult) {
        $count = 0;
        while($count == 0 && $emailrow = mysqli_fetch_assoc($emailResult)) {
            if($count ==0 && $emailrow['email'] == $email) {
                echo '<script>
                        alert("Email- '.$email.' is Already used by someone.")
                        window.location.href="../signup.php";                        
                    </script>';
                $count++;
            } 
        }
        if($count > 0) {
            echo "<div style='color:red; text-align: center; margin: 20px; font-size: larger; fint-weight: bold;'>Email is already used. </div>";
        } else {
            if($conn) {
                $insertQuery = "INSERT INTO `userlogins` (`sno`, `ID`, `username`, `email`, `password`, `status`) 
                                VALUES
                                (NULL, '', '$username', '$email', '$password', '');";
                
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
                echo '<h1 style="color:red"> CantNot Connected to server. <a href="../signup.html">Try Again</a> </h1>';
            }
        }

    }


?>