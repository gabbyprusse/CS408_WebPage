<?php

declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'On');

function outputUsername(): void
{
    if (isset($_SESSION["userId"])) {
        echo "Welcome, " . $_SESSION["user_username"];
    } else {
        echo "Please log in or create a profile";
    }
}
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
