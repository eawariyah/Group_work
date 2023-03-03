<?php
session_start(); // Start the session

// If the user is not logged in, redirect to the login page
if (!isset($_SESSION['uid'])) {
    header('Location: /index.php');
    exit();
}

// If the user is logged in, unset the session variables and destroy the session
$_SESSION = array();
session_destroy();
header('Location: /index.php');
exit();
?>

