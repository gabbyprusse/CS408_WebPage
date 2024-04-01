<?php

declare(strict_types=1);

// accepts boolean and array parameter types
function validateUsername(bool|array $result) {
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function validatePwd(string $pwd, string $hashPwd) {
    if (!password_verify($pwd, $hashPwd)) {
        return true;
    } else {
        return false;
    }
}

function input_empty(string $user, string $pwd) {
    if (empty($user) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

