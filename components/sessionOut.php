<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>

<?php
  
$conn = mysqli_connect("localhost", "root", "", "live chatting");
$sno = $_SESSION['sno'];
//change the status of user from 'Active' to 'Inactive'
mysqli_query($conn, "UPDATE `userlogins` SET `status` = 'Inactive' WHERE `userlogins`.`sno` = '$sno'");
  
// remove all session variables
session_unset();

// destroy the session
session_destroy();
header("Location: ../index.php");
?>
</body>
</html>
