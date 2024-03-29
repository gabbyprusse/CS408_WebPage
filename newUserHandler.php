<?php
session_start();
require_once 'Dao.php';

$user = $_POST['user'];
$pw = $_POST['pw'];
$location = $_POST['location'];
$distance = $_POST['distance'];
$level = $_POST['level'];
$goal = $_POST['goal'];

$messages = array();
$_SESSION['complete'] = "no";

if(0 == strlen($user)) {
    $messages[] = "please enter a username";
}

if(0 == strlen($pw)) {
    $messages[] = "please enter your password";
}

if(0 == strlen($location)) {
    $messages[] = "please tell me where you are";
}

if(0 == strlen($location)) {
    $messages[] = "please tell me where you are";
}

if(!isset($_POST['level'])){
    $messages[] = "please enter your experience level";
}

if(0 == strlen($goal)) {
    $messages[] = "please enter your goal";
}

if($goal > 10) {
    $messages[] = "please enter a realistic goal";
}

if (0 < count($messages)) {
    $_SESSION['messages'] = $messages;
    $_SESSION['inputs'] = $_POST;
    header("Location: http://localhost/black_market/comments.php");
    exit();
}


$dao = new Dao();

$_SESSION['sentiment'] = "good";
$messages[] = "Thanks for the comment!";
$_SESSION['messages'] = $messages;

header("Location: http://localhost/black_market/comments.php");
exit();