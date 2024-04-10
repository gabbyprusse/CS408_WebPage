<?php

class Dao
{

    public $filename;

    private $host = "localhost";
    private $db = "info";
    private $user = "root";
    private $pwd = "root";

    public function getConnection(): PDO
    {
        //$this->logger->LogDebug("getting a connection...");
        return new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
            $this->pwd);
    }
///////// NEW USER ///////////

    /*
     * sets the user by adding them to database
     */
    function setUser(string $user, string $pwd, int $goal): void
    {
        $conn = $this->getConnection();
        $query = "INSERT INTO users 
            (username, pwd, goal) 
        VALUES
            (:username, :pwd, :goal);";
        $stmt = $conn->prepare($query);

        $options = [
            'cost' => 12
        ];
        $hashpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":username", $user);
        $stmt->bindParam(":pwd", $hashpwd);
        $stmt->bindParam(":goal", $goal);
        $stmt->execute();
    }

    /*
     * gets user and all their info
     */
    function getUser(string $user) {
        $conn = $this->getConnection();
        $query = "SELECT * FROM users WHERE username = :username;";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $user);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    /*
     * gets the user's username
     */
    function getUsername(string $user) {
        $conn = $this->getConnection();
        $query = "SELECT username FROM users WHERE username = :username;";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $user);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    /*
     * gets the plan of the user based on their intended running goal
     */
    public function getPlan($user)
    {
        $conn = $this->getConnection();
        $query = "SELECT goal FROM users WHERE username = :username;";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $user);
        $stmt->execute();

        $goal = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($goal == 1) {
            $dist = "1mi";
        } else if ($goal == 2) {
            $dist = "5k";
        } else {
            $dist = "10k";
        }
        return $conn->query("SELECT monday, tuesday, wednesday, thursday, friday, saturday, sunday FROM {$dist} ")->fetchAll(PDO::FETCH_ASSOC);
    }

}

//    public function getGoods () {
//        $stuff = file_get_contents($this->filename);
//        $lines = explode("\n", trim($stuff));
//        return $lines;
//    }

//    public function saveComment($name, $comment) {
//        $this->logger->LogInfo("saveComment: [{$name}], [{$comment}]");
//        $conn = $this->getConnection();
//        $saveQuery =
//            "INSERT INTO comments
//            (comment, name)
//            VALUES
//            (:comment, :name)";
//        $q = $conn->prepare($saveQuery);
//        $q->bindParam(":comment", $comment);
//        $q->bindParam(":name", $name);
//        $q->execute();
//    }

//    public function getComments () {
//        $conn = $this->getConnection();
//        return $conn->query("SELECT comment, date_entered, id FROM comments ORDER BY date_entered desc")->fetchAll(PDO::FETCH_ASSOC);
//    }
//
//}