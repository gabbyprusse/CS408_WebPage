<?php

declare(strict_types=1);

use Crypto\Hash;

error_reporting(-1);
ini_set('display_errors', 'On');
require_once "Dao.php";

// accepts boolean and array parameter types
function validateUsername($user, $result): bool
{
    if (strcmp($result, $user) == 0) {
        return true;
    } else {
        return false;
    }
}

function validatePwd($pwd, $hashPwd): bool
{
    // verifies based on the hashed pwd
    if (Hash::check($pwd, $hashPwd)) {
        return true;
    } else {
        return false;
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

