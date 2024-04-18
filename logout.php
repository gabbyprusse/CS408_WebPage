<?php
//if (session_id() == false) {
    session_start();
//}
$_SESSION['yes'] = false;
session_destroy();
header("Location: ../index.php");
exit();
?>
