<?php

class Database {
    private $host = "localhost";
    private $database = "appointment_system";
    private $userName = "root";
    private $password = "";

    public $conn;

     

    public function getConnection() {
        $this->conn = null;

        try {
            // Create a new PDO connection
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->userName, $this->password);
            
            // Set error mode to throw exceptions for debugging
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            echo "Database connection successful!"; // Success message
        } catch (PDOException $e) {
            // Show error message if connection fails
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->conn;

    }
    
    

}


