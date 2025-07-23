<?php
// session_start(); // Start the session to access session variables

// // Destroy all session data
// session_unset();  // Remove all session variables
// session_destroy(); // Destroy the session

// // Redirect to the login page
// header('Location: login.php');
// exit;
?>


<?php
session_start(); // Start the session to access session variables

// Destroy all session data
session_unset();  // Remove all session variables
session_destroy(); // Destroy the session
?>
<!DOCTYPE html>
<html>
<head>
    <script>
        // Notify other tabs to log out by setting a flag in localStorage
        localStorage.setItem('logout', Date.now());
        // Redirect this tab to login page
        window.location.href = "login.php";
    </script>
</head>
<body>
    Logging out...
</body>
</html>

