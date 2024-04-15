<?php

declare(strict_types=1);
require_once 'Dao.php';


function check_login_errors(): void
{
    if (isset($_SESSION['errors_login']))
    {
        $errors = $_SESSION['errors_login'];

        echo "<br";

        foreach ($errors as $error) {
            echo '<p class=form-error">' . $error . '</p>';
        }
        unset($_SESSION["errors_login"]);

        unset($_SESSION['errors']);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo '<br>';
        echo '<p class="form-success">Get ready to run!</p>';
    }

}
