<?php

declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'On');

// accepts boolean and array parameter types
function validateUsername(bool|array $result): bool
{
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function validatePwd(string $pwd, string $hashPwd): bool
{
    if (!password_verify($pwd, $hashPwd)) {
        return true;
    } else {
        return false;
    }
}

function input_empty(string $user, string $pwd): bool
{
    if (empty($user) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

