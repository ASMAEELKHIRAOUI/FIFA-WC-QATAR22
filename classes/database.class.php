<?php 
class Database {
    public $host = "localhost";
    public  $user = "root";
    public  $pwd = "";
    public  $dbName = "fifa";

    public  function connect() {
        try {
            $pdo = new PDO("mysql:host=$this->host;port=3307;dbname=$this->dbName", $this->user, $this->pwd);
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
}