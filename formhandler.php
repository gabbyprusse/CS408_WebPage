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
            header("Location: ../NewUser.php");
        }

        $query = "INSERT INTO users (username, pwd) VALUES (?, ?, ?)";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$user, $pwd]);

        $pdo = null;
        $stmt = null;

        header("Location: ../NewUser.php");
        exit();
    }
    catch (PDOException $e)
    {
        die("Query failed " . $e->getMessage());
    }
} else {
    header("Location: ../NewUser.php");
}
