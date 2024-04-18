<?php

declare(strict_types=1);


error_reporting(-1);
ini_set('display_errors', 'On');
require_once "Dao.php";

// accepts boolean and array parameter types
function validateUsername($user, $result): bool
{
    // username reg expression : no white space
    $pattern = "/\s/";
    if (strcmp($result, $user) == 0 || preg_match($pattern, $_POST['username']) == null) {
        return true;
    } else {
        return false;
    }
}

function validatePwd($pwd, $hashPwd): bool
{
    // verifies based on the hashed pwd
    if (password_verify($pwd, $hashPwd)) {
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

