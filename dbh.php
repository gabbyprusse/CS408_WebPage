
<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');

    $dsn = 'mysql:host=localhost;dbname=info';
    $host = 'localhost';
    $dbname = 'info';
    $user = 'root';
    $pwd = 'root';

    // connects to database
    try {
        $pdo = new PDO($dsn, $user, $pwd, );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed ". $e->getMessage();
    }


    function getPlan() {
        $conn = $pdo->getConnection();
        return $conn->query("SELECT monday, tuesday, wednesday, thursday, friday, saturday, sunday FROM {comments} ")->fetchAll(PDO::FETCH_ASSOC);
    }