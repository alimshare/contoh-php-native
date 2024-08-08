<?php 
    session_start();
    if (!isset($_SESSION['user'])) {
        $_SESSION['error'] = "Login dahulu";
        header('location: login.php');
    }
?>