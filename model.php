<?php

declare(strict_types=1);

function getUsername(object $pdo, string $user) {
    $query = "SELECT username FROM user WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $user);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


