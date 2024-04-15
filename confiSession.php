<?php
session_start();
ini_set('session.use_only_cookies', 1);
ini_set('session.use_only_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'tkck4yllxdrw0bhi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com',
    'path' => '/',
    'secure' => true,
    'httponly' => true]);



if (isset($_SESSION["userId"])) {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerateId();
    } else {
        // 30 min
        $interval = 60 * 30;
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerateId();

        } else {
            if (!isset($_SESSION["last_regeneration"])) {
                regenerateId();
            } else {
                // 30 min
                $interval = 60 * 30;
                if (time() - $_SESSION["last_regeneration"] >= $interval) {
                    regenerateId();
                }
            }
        }
    }
}

// when user is signed in
function regenerateIdSI() {
    session_regenerate_id(true );

    // creates new session id with user's id
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $_SESSION["userId"];
    session_id($sessionId);

    $_SESSION["last_regeneration"] = time();
}
function regenerateId() {
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}



