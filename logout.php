<?php

session_start();

// Delete session variables
$_SESSION = array();
session_destroy();

// Delete session cookies
setcookie('user', '');
setcookie('user_status', '');
setcookie('password', '');

// Go back to login page once logged out
header('location: login.php');
?>