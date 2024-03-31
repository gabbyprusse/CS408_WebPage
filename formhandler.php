<?php

// submitting to users database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.php";

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
