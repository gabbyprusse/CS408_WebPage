<?php

error_reporting(-1);
ini_set('display_errors', 'On');
require_once 'Dao.php';
require_once 'NUcontrol.php';

// submitting to users database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pwd = $_POST["pwd"];
    $goal = $_POST["goal"];

    $dao = new Dao();
    $dao->getConnection();


    try {

        // ERROR HANDLERS
        $errors = [];
        // no username
        if (0 == strlen($user)){
            $errors["emptyUser"] = "Fill in Username";
        }
        // no pwd
        if (0 == strlen($pwd)){
            $errors["emptyPwd"] = "Fill in Password";
        }
        // pwd too short
        else if (strlen($pwd) < 8) {
            $errors["shortPwd"] = "Password must be at least 8 characters";
        }
        // no goal
        if (0 == strlen($goal)){
            $errors["emptyGoal"] = "Choose a Goal";
        }
        // duplicated username
        if (used_username($user)) {
            $errors["usedUsername"] = "Username already taken";
        }

        // saves valid data
        $signUpData = [
            "username" => $user,
            "goal" => $goal
        ];
        $_SESSION["signUp_data"] = $errors;

        check_signup_errors();

        require_once "confiSession.php";

        // creates user
        $dao->setUser($user, $pwd, $goal);
        header("Location: ../Profile.php");
        $dao = null;
        $stmt = null;

        die();

        //header("Location: ../NewUser.php?signup=success");
    }
    catch (PDOException $e)
    {
        die("Query failed " . $e->getMessage());
    }
} else {
    header("Location: ../NewUser.php");
    die();
}



