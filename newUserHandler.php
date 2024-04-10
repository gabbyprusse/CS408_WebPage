<?php

error_reporting(-1);
ini_set('display_errors', 'On');
require_once 'dbh.php';
require_once 'Dao.php';
require_once 'NUcontrol.php';

// submitting to users database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pwd = $_POST["pwd"];
    $goal = $_POST["goal"];

    $pdo = new Dao();
    $pdo->getConnection();


    try {

        // ERROR HANDLERS
        $errors = [];
        if (input_empty($user, $pwd, $goal)){
            $errors["emptyInput"] = "Fill in all fields";
        }
        if (used_username($pdo, $user)) {
            $errors["usedUsername"] = "Username already taken";
        }

        require_once "confiSession.php";

        if ($errors) {
            $_SESSION["errors_signUp"] = $errors;

            $signUpData = [
                "username" => $user,
                "goal" => $goal
            ];
            $_SESSION["signUp_data"] = $errors;

            header("Location: ../NewUser.php");
            die();
        }

        setUser($pdo, $user, $pwd, $goal);

        header("Location: ../NewUser.php?signup=success");
        header("Profile.php");
        $pdo = null;
        $stmt = null;

        die();
    }
    catch (PDOException $e)
    {
        die("Query failed " . $e->getMessage());
    }
} else {
    header("Location: ../NewUser.php");
    die();
}



