// database handler

<?php

    $dsn = "mysql:host=localhost;dbname=first";
    $user = "gabbyprusse";
    $pwd = "gabby";

    // connects to database
    try {
        $pdo = new PDO($dsn, $user, $pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed ". $e->getMessage();
    }

