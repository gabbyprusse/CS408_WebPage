<?php
session_start();

require_once 'Dao.php';
require_once 'SIcontrol.php';

$dao = new Dao();

        $errors = [];
        $user = htmlspecialchars($_POST['user'], ENT_QUOTES, 'UTF-8');
        $pwd = $_POST['pwd'];


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
        if (!user_empty($user) && !pwd_empty($pwd)) {
            if ($result["pwd"] == null) {
                $errors['nullPwd'] = $result['pwd'];
            } if (!validatePwd($pwd, $result['pwd'])){
                $errors["pwd"] = "pwd" . $pwd . " " . $result['pwd'];
            }
            if (!validateUsername($user, $result['username']))
                $errors["login_incorrect"] = "Incorrect login";
        }

        $_SESSION["errors_signin"] = $errors;
        if (count($_SESSION['errors_signin']) === 0) {
            $_SESSION['authenticated'] = true;
            $_SESSION['userId'] = $result['id'];
            $_SESSION['user_username'] = $result['username'];
            $_SESSION['goal'] = $result['goal'];

            header("Location: Profile.php");
        } else {
            header("Location: ../SignIn.php");
        }
