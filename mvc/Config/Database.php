<?php

class Database {
    private $host = "localhost";
    private $database = "appointmentsystem";
    private $userName = "root";
    private $password = "";

    public $conn;

     

    public function getConnection() {
        $this->conn = null;

        try {
            // Create a new PDO connection , Pdo is used for establishing the connection with database 
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->userName, $this->password);

            // echo "Database connection successful!"; //  to show the connection is established successfully 
        } catch (PDOException $e) {
            // to the  message if the connection is not establish
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->conn;

    }
    
    

}


