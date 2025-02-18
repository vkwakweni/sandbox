<?php

class Database {
    private $pdo; // the connection
    private $host = "localhost:3306";
    private $dbname = "pandoindex";
    private $username = "root";
    private $password = "";

    // Constructor for creating the PDO connection
    public function __construct() {
        try {
            $dburl = "mysql:host={$this->host};dbname={$this->dbname}"; // jdbc:mysql://localhost:3306/wordnet31
            $this->pdo = new PDO($dburl, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die("Database connection error: " . $ex->getMessage());
        }
    }

    // Query data from teh specified table
    public function fetchAllFromTable($table) {
        try {
            $result = $this->pdo->query("SELECT * FROM $table ORDER BY id");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Query error: " . $ex->getMessage();
            return [];
        }
    }

    public function closeConnection() {
        $this->pdo = null;
    }
}

?>