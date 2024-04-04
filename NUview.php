<?php

declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'On');

//function signUpInputs()
//{
//    if (isset($_SESSION["signUp_data"]["username"]) && !isset($_SESSION["errors"]["usedUsername"])) {
//        echo '<label for="user">Username:</label><br>
//        <input type="text" id="user" name="user" value="' . $user . '"><br>';
//    } else {
//        echo '<label for="user">Username:</label><br>
//        <input type="text" id="user" name="user" placeholder="applesauce" "><br>';
//    }
//}

function check_signup_errors(): void
{
    if (isset($_SESSION['errors']))
    {
        $errors = $_SESSION['errors'];
        echo '<br>';
            foreach ($errors as $error) {
                echo '<p class=form-error>' . $error . '</p>';
            }

            unset($_SESSION['errors']);
        } else if (isset($_GET["signup"]) && $_GET["signup"] == "success") {
            echo '<br>';
            echo '<p class="form-success">Get ready to run!</p>';
        }

    }

