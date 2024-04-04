<?php
error_reporting(-1);
ini_set('display_errors', 'On');
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.php";
        require_once "SImodel.php";
        require_once "SIcontrol.php";

        // ERROR HANDLERS
        $errors = [];

        if (input_empty($user, $pwd)){
            $errors["emptyInput"] = "Fill in all fields";
        }

        $result = getUser($pdo, $user);

        // if user exits, does pwd match
        if (validateUsername($result)) {
            $errors["login_incorrect"] = "Incorrect login";
        }
        if (validatePwd($pwd, $result["pwd"]) && !validateUsername($result)) {
            $errors["login_incorrect"] = "Incorrect login";
        }

        require_once "confiSession.php";

        // don't want to save previous fields for security reasons
        if ($errors) {
            $_SESSION["errors_login"] = $errors;

            header("Location: ../SignIn.php");
            die();
        }

        // creates new session id with user's id
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" .  $result["id"];
        session_id($sessionId);

        $_SESSION["userId"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../Profile.php?login=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed " . $e->getMessage());
    }

} else {
        header("Location: ../SignIn.php");
        die();
}