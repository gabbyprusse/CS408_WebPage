<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_only_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true]);

session_start();

if (!isset($_SESSION["last_regeneration"])) {
    regenerateId();
} else {
    // 30 min
    $interval = 60 * 30;
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        regenerateId();
    }
}

function regenerateId() {
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
}


