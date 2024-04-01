<?php

declare(strict_types=1);

function input_empty(string $user, string $pwd) {
    if (empty($user) || empty($pwd)) {
        return true;
    }
    return false;
}

function used_username(object $pdo, string $user) {
    if (getUsername($pdo, $user)) {
        return true;
    } else {
       return false;
    }
}
