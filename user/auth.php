<?php
session_start();

// If user is not logged in, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: /Authentication/signIn/login.php");
    exit;
}
?>
