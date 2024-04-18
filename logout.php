<?php
if (session_id() == false) {
    session_start();
}
session_destroy();
header("Location: ../main.php");
exit();
