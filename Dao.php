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

        $options = [
            'cost' => 12
        ];
        $hashpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

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
    public function getPlan($user)
    {
        $conn = $this->getConnection();
        $query = "SELECT goal FROM users WHERE username = :username;";
        // escapes injection
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $user);
        $stmt->execute();
        $goal = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($goal == 1) {
            return $conn->query("SELECT * FROM 1mi ")->fetchAll(PDO::FETCH_ASSOC);
        } else if ($goal == 2) {
            return $conn->query("SELECT * FROM 5k ")->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return $conn->query("SELECT * FROM 10k ")->fetchAll(PDO::FETCH_ASSOC);
        }
//        else {
//            exit;
//        }

    }

//    function check_signin() {
//        if (isset($_SESSION['user_id'])) {
//            $id = $_SESSION['user_id'];
//            $query = "select * from users where id = '$id' limit 1";
//
//            $result = mysqli_query($dao, $query);
//            if ($result && mysqli_num_rows($result) > 0) {
//                $userdata = mysqli_fetch_assoc($result);
//                return $userdata;
//            }
//        }
//        //redirect to sign in
//        header("Location: SignIn.php");
//        die();
//    }

}


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