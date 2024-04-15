<?php
session_start();

require_once 'Dao.php';
require_once 'SIcontrol.php';

    $user = $_POST["user_username"];
    $pwd = $_POST["pwd"];

    $dao = new Dao();

        // ERROR HANDLERS
        $errors = [];

        // empty input
        if (input_empty($user, $pwd)){
            $errors["emptyInput"] = "Fill in all fields";
        }

        $result = $dao->getUser($user);
        // checks if user and pwd are false
        if (!validatePwd($pwd, $result["pwd"]) || !validateUsername($result)) {
            $errors["login_incorrect"] = "Incorrect login";
        }

        require_once "confiSession.php";

        // don't want to save previous fields for security reasons
        if (count($errors) > 0) {
            $_SESSION['authenticated'] = false;
            $_SESSION["errors_signin"] = $errors;
            header("Location: ../SignIn.php");
            die();
        } else {
            $_SESSION['authenticated'] = true;
            $_SESSION["userId"] = $result['id'];
            $_SESSION["user_username"] = htmlspecialchars($result['username'], ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401);
            $_SESSION['goal'] = $result['goal'];

            header("Location: Profile.php");
        }
