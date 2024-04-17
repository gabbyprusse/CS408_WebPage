<?php
session_start();

        // ERROR HANDLERS
        $errors = [];
        // no username entered
        $user = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
        if (0 == strlen($user)){
            $errors["emptyUser"] = "Fill in Username";
        }


    // pwd reg expression : pwd needs a num in it
        $pattern = "/\d/";
        if (preg_match_all($pattern, $_POST['pwd']) <= 0) {
            $errors['invalidPwd'] = "Password must contain at least one number";
        }

      // no pwd entered
        $pwd = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
        if (0 == strlen($pwd)){
            $errors["emptyPwd"] = "Fill in Password";
        }
        // no goal selected
        $goal = $_POST['goal'];
        if (0 == strlen($goal)){
            $errors["emptyGoal"] = "Choose a Goal";
        }

        require_once 'Dao.php';
        $dao = new Dao();
        // duplicated username
        if ($dao->getUsername($user) != null) {
            $errors["usedUsername"] = "Username already taken";
        }
        // checks if any errors occurred
        if (isset($_SESSION['errors_newuser'])) {
            $_SESSION['errors_newuser'] = $errors;
            //header('Location: newUser.php');

        } else {
            // creates user
            $dao->setUser($user, $pwd, $goal);
            $_SESSION['authenticated'] = true;
            //$_SESSION['userId'] = $result['id'];
            $_SESSION['user_username'] = $_POST($user);
            $_SESSION['goal'] = $_POST($goal);
            header('Location: Profile.php');
            die();
            }






