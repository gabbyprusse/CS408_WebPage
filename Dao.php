<?php

require_once '../KLogger.php';
    //$filename;
    $dsn = "mysql:dbname=first;host=127.0.0.1";
    $db = "first";
    $user = "root";
    $pass = "root";
    //protected KLogger $logger;


    try {
        $dbh = new PDO($dsn, $user, $pass);
        echo "Connected";
    } catch
    (PDOException $e) {
        echo "Connection failed" . $e->getMessage();
    }

    try {
        $dbh->query("select monday, tuesday, wednesday, thurday, friday, saturday, sunday from plan1 order by desc ")
    } catch (Exception $e) {

    }


    public function getConnection()
    {
        $this->logger->LogDebug("getting a connection...");

        return
            new PDO("mysql:host={$this->host};db={$this->db}", $this->user,
                $this->pass);
    }

    public function __construct($filename = "stuff.data")
    {
        $this->logger = new KLogger ("log.txt", KLogger::WARN);
        $this->filename = $filename;
    }

    public function getGoods()
    {
        $stuff = file_get_contents($this->filename);
        $lines = explode("\n", trim($stuff));
        return $lines;
    }

    public function saveComment($name, $comment)
    {
        $this->logger->LogInfo("saveComment: [{$name}], [{$comment}]");
        $conn = $this->getConnection();
        $saveQuery =
            "INSERT INTO comments
            (comment, name)
            VALUES
            (:comment, :name)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":comment", $comment);
        $q->bindParam(":name", $name);
        $q->execute();
    }

    public function getComments()
    {
        $conn = $this->getConnection();
        return $conn->query("SELECT comment, date_entered, id FROM comments ORDER BY date_entered desc")->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>