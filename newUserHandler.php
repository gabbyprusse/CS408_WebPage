<?php
session_start();

        // ERROR HANDLERS
        $errors = [];
        // no username entered
        $user = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
        if (0 == strlen($user)){
            $errors["emptyUser"] = "Fill in Username";
        }

        // username reg expression : no white space
        $pattern = "/\s/";
        if (preg_match($pattern, $_POST['username']) != null) {
            $errors['invalidUsername'] = "Username must be one word";
        }


    // pwd reg expression : pwd needs a num in it
        $pattern = "/\d/";
        if (preg_match_all($pattern, $_POST['pwd']) <= 0) {
            $errors['invalidPwd'] = "Password must contain a number";
        }

      // no pwd entered
        $pwd = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');
        if (0 == strlen($pwd)) {
            $errors["emptyPwd"] = "Fill in Password";
        }

            // no goal selected
            $goal = $_POST['goal'];
            if (0 == strlen($goal)) {
                $errors["emptyGoal"] = "Choose a Goal";
            }

            require_once 'Dao.php';
            $dao = new Dao();
            // duplicated username
            if ($dao->getUsername($user) != null) {
                $errors["usedUsername"] = "Username already taken";
            }

            $_SESSION['errors_newuser'] = $errors;

            // checks if any errors occurred, by seeing if array is empty
            if (count($_SESSION['errors_newuser']) === 0) {
                // creates user
                $dao->setUser($user, $pwd, $goal);
                $_SESSION['yes'] = true;
                //$_SESSION['userId'] = $result['id'];
                $_SESSION['user'] = $user;
                $_SESSION['goal'] = $goal;
                header('Location: Profile.php');

            } else {
                header('Location: newUser.php');

            }






