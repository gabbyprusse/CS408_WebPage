<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'gabby' && $password == '123') {
    $_SESSION['authenticated'] = true;
    header("Location: http://localhost/cs408_webdev/profile.php");
} else {
    header("Location: http://localhost/cs408_webdev/login.php");
}
exit();
