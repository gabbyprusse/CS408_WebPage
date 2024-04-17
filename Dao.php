<?php

class Dao
{

    public $filename;

    private $host = "tkck4yllxdrw0bhi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $db = "shjuruwzeawgadq0";
    private $user = "dcguyzkyhwvbw176";
    private $pwd = "ssxz509et77a2pb1";

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

        $hashpwd = password_hash($pwd, PASSWORD_BCRYPT);

        // escapes injection
        $stmt->bindParam(":username", $user);
        $stmt->bindParam(":pwd", $hashpwd);
        $stmt->bindParam(":goal", $goal);
        $stmt->execute();
    }

    /*
     * gets user based on their username and all their info
     */
    function getUser($user) {
        $conn = $this->getConnection();
        $query = "SELECT * FROM users WHERE username = :username;";
        // escapes injection
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $user);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    /*
     * gets the user's username
     */
    function getUsername($user) {
        $conn = $this->getConnection();
        $query = "SELECT username FROM users WHERE username = :username;";
        // escapes injection
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $user);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    /*
     * gets the plan of the user based on their intended running goal
     */
    public function getPlan($goal) {
        $conn = $this->getConnection();
        if ($goal == 1) {
            return $conn->query("SELECT * FROM 1mi ")->fetchAll(PDO::FETCH_ASSOC);
        } else if ($goal == 2) {
            return $conn->query("SELECT * FROM 5k ")->fetchAll(PDO::FETCH_ASSOC);
        } else if ($goal == 3) {
            return $conn->query("SELECT * FROM 10k ")->fetchAll(PDO::FETCH_ASSOC);
        } else {
            exit;
        }
    }

}
