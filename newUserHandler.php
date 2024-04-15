<?php
session_start();

        // ERROR HANDLERS
        $errors = [];
        // no username entered
        $user = $_POST['username'];
        if (0 == strlen($user)){
            $errors["emptyUser"] = "Fill in Username";
        }
        // no pwd entered
        $pwd = $_POST['pwd'];
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
        if (count($errors) > 0) {
            $_SESSION['errors_newuser'] = $errors;
            header('Location: newUser.php');

            // saves valid data
            $signUpData = [
                "username" => $user,
                "goal" => $goal
            ];
            $_SESSION["newuser_data"] = $signUpData;
//
//            // submitting to users database
//            if ($_SERVER["REQUEST_METHOD"] == "POST") {
//                // something was posted so data is to be collected/saved
//                $user = $_POST["username"];
//                $pwd = $_POST["pwd"];
//                $goal = $_POST["goal"];
//                exit;
//            }
        } else {
            // creates user
            $result = $dao->setUser($user, $pwd, $goal);
            $_SESSION['authenticated'] = true;
            $_SESSION['userId'] = $result['id'];
            $_SESSION['user_username'] = $user;
            $_SESSION['goal'] = $goal;
            header('Location: Profile.php');
            die();
            }






