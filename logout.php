<?php
session_start();
session_destroy();  // Destroy the session to log the user out

// Optionally clear the "Remember Me" cookie (if used)
//setcookie("rememberme", "", time() - 3600, "/");  // Expire the cookie

// Redirect to the login page or home page after logout
header("Location: index.php");
exit();
?>
