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

        if (count($errors) > 0) {
            $_SESSION["errors_newuser"] = $errors;
            header('Location: newUser.php');
        }

        // saves valid data
        $signUpData = [
            "username" => $user,
            "goal" => $goal
        ];
        $_SESSION["signUp_data"] = $signUpData;


        require_once "confiSession.php";

    // submitting to users database
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // something was posted so data is to be collected/saved
            $user = $_POST["username"];
            $pwd = $_POST["pwd"];
            $goal = $_POST["goal"];



        // creates user
        $dao->setUser($user, $pwd, $goal);
        header("Location: ../Profile.php");
        $dao = null;
        $stmt = null;

        die();

        //header("Location: ../NewUser.php?signup=success");
} else {
    // data was no valid
    header("Location: ../NewUser.php");
    die();
}



