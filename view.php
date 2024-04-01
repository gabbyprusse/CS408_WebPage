<?php
    function check_signup_errors() {
        if (isset($_SESSION['errors']))
        {
            $errors = $_SESSION['errors'];

            echo "<br>";

            foreach ($errors as $error) {
                echo '<p class=form-error> . $error </p>';
            }

            unset($_SESSION['errors']);
        }
    }

