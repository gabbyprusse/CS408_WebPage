<?php
session_start();

require_once 'Dao.php';
require_once 'SIcontrol.php';

$dao = new Dao();


        $errors = [];

        $user = htmlspecialchars($_GET['user'], ENT_QUOTES, 'UTF-8');
        $pwd = htmlspecialchars($_GET['pwd'], ENT_QUOTES, 'UTF-8');


// ERROR HANDLERS
        // empty input
        if (user_empty($user)){
            $errors["emptyInput"] = "Fill in username";
        }
        // empty input
        if (pwd_empty($pwd)){
            $errors["emptyInput"] = "Fill in password";
        }

        $result = $dao->getUser($user);
        // checks if user and pwd are false
        if (!user_empty($user) && !pwd_empty($pwd)){
            if(!validatePwd($pwd, $result["pwd"]) || !validateUsername($user, $result)) {
                $errors["login_incorrect"] = "Incorrect login";
                $_SESSION['authenticated'] = false;
                $_SESSION["errors_signin"] = $errors;
                header("Location: ../SignIn.php");
            }
        } else {
            $_SESSION['authenticated'] = true;
            $_SESSION['userId'] = $result['id'];
            $_SESSION['user_username'] = $result['username'];
            $_SESSION['goal'] = $result['goal'];

            header("Location: Profile.php");
        }
