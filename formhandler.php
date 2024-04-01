<?php

// submitting to users database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {

        require_once "dbh.php";
        require_once "model.php";
        require_once "control.php";

        // ERROR HANDLERS
        $errors = [];
        if (input_empty($user, $pwd)){
            $errors["emptyInput"] = "Fill in all fields";
        }
        if (used_username($pdo, $user)) {
            $errors["usedUsername"] = "Username already taken";
        }

        require_once "confiSession.php";

        if ($errors) {
            $_SESSION["errors_signUp"] = $errors;

            $signUpData = [
                "username" => $user
            ];
            $_SESSION["signUp_data"] = $errors;

            header("Location: ../NewUser.php");
            die();
        }

        createUser($user, $pwd);

        header("Location: ../NewUser.php?signup=success");

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
