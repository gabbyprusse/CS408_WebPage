<?php

declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'On');
require_once "Dao.php";

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
    // verifies based on the hashed pwd
    if (!password_verify($pwd, $hashPwd) || $hashPwd == null) {
        return false;
    } else {
        return true;
    }
}

function user_empty(string $user): bool
{
    if (empty($user)) {
        return true;
    } else {
        return false;
    }
}

function pwd_empty(string $pwd): bool
{
    if (empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

