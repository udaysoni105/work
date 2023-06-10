<?php
// Start the session
session_start();

// Set a session variable
$_SESSION['username'] = 'John';
$_COOKIE['color'] = 'blue';

// Set a cookie with an expiry time of one hour
setcookie('color', 'blue', time()+3600);

// Display the session and cookie values
echo "Session username: " . $_SESSION['username'] . "<br>";
echo "Cookie color: " . $_COOKIE['color'] . "<br>";

// Unset the session variable
unset($_SESSION['username']);

// Delete the cookie by setting an expiry time in the past
setcookie('color', '', time()-3600);
?>
