<?php

declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'On');
require_once "Dao.php";

// accepts boolean and array parameter types
function validateUsername($user, $result): bool
{
    if ($result == $user) {
        return true;
    } else {
        return false;
    }
}

function validatePwd($pwd, $hashPwd)
{
    // verifies based on the hashed pwd
    if (!password_verify($pwd, $hashPwd) || $hashPwd == null) {
        return false;
    } else {
        return true;
    }
}

function user_empty(string $user)
{
    if (empty($user)) {
        return true;
    } else {
        return false;
    }
}

function pwd_empty(string $pwd)
{
    if (empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

