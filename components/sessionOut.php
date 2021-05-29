<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
header("Location: ../index.php");
?>
</body>
</html>