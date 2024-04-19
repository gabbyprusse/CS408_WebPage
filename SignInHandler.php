<?php
require_once 'Dao.php';
require_once 'SIcontrol.php';
if (!session_id()) {
    session_start();
}

$dao = new Dao();

        $errors = [];
        $user = htmlspecialchars($_POST['user'], ENT_QUOTES, 'UTF-8');
        $pwd = $_POST['pwd'];

// ERROR HANDLERS
        // empty input
        if (user_empty($user)){
            $errors["emptyUser"] = "Fill in username";
        } else {
            $_SESSION['user'] = $user;
        }
        // empty input
        if (pwd_empty($pwd)){
            $errors["emptyPwd"] = "Fill in password";
        }

        $result = $dao->getUser($user);
        // checks if user has a profile
        if ($result["pwd"] == null || $result["username"] == null) {
            $errors["noProfile"] = "Incorrect login";
            $_SESSION['user'] = null;
            // checks if user and pwd are valid
        } else if (!validatePwd($pwd, $result['pwd']) || !validateUsername($user, $result['username'])) {
            $errors["login_incorrect"] = "Incorrect login";
        }
        $_SESSION['user'] = $user;

        $_SESSION["errors_signin"] = $errors;
        if (count($_SESSION['errors_signin']) == 0) {
            $_SESSION['yes'] = true;
            //$_SESSION['userId'] = $result['id'];
            $_SESSION['user'] = $result['username'];
            $_SESSION['goal'] = $result['goal'];
            header("Location: Profile.php");
        } else {
            header("Location: SignIn.php");
        }
