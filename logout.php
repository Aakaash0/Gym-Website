<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo "<script>alert('Logout Successful.')</script>";
header("Location: index.php"); //to redirect back to "index.php" after logging out
exit();
?>