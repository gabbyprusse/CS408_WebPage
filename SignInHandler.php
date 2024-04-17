<?php
session_start();

require_once 'Dao.php';
require_once 'SIcontrol.php';

$dao = new Dao();

        $errors = [];
        $user = htmlspecialchars($_POST['user'], ENT_QUOTES, 'UTF-8');
        $pwd = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');


// ERROR HANDLERS
        // empty input
        if (user_empty($user)){
            $errors["emptyUser"] = "Fill in username";
        }
        // empty input
        if (pwd_empty($pwd)){
            $errors["emptyPwd"] = "Fill in password";
        }

        $_SESSION["errors_signin"] = $errors;

        $result = $dao->getUser($user);
        // checks if user and pwd are false
        if (!user_empty($user) && !pwd_empty($pwd)){
            if($result["pwd"] == null)
            {
                $errors["nullPwd"] = "nullPwd";
            }
                if(!validatePwd($pwd, $result["pwd"])){
                    $errors["pwdWrong"] = "pwd wrong " . $result["pwd"] . " " . $pwd;
                } if (!validateUsername($user, $result)) {
                    echo $result;
                    echo $user;
                $errors["login_incorrect"] = "Incorrect login";
            }
                $_SESSION['authenticated'] = false;
                $_SESSION["errors_signin"] = $errors;
                header("Location: ../SignIn.php");
        } else {
            $_SESSION['authenticated'] = true;
            $_SESSION['userId'] = $result['id'];
            $_SESSION['user_username'] = $_POST['username'];
            $_SESSION['goal'] = $result['goal'];

            header("Location: Profile.php");
        }
