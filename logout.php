<?php
//if (session_id() == false) {
    session_start();
//}
session_unset();
session_destroy();
header("Location: ../index.php");
exit();

