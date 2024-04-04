<?php

declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'On');
    function getUser(object $pdo, string $user) {
        $query = "SELECT * FROM users WHERE username = :username;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $user);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
