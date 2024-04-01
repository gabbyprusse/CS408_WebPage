<?php

declare(strict_types=1);

function getUsername(object $pdo, string $user) {
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $user);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


function setUser(object $pdo, string $user, string $pwd, int $goal) {
    $query = "INSERT INTO users (user, pwd, goal) VALUES (:username, :pwd, :goal);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
     $hashpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $user);
    $stmt->bindParam(":pwd", $hashpwd);
    $stmt->bindParam(":goal", $goal);
    $stmt->execute();
}


