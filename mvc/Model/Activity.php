<?php 

class Activity{

    private $conn;
    private $table_name='activities';

    public function __construct($db){
        $this->conn=$db;
    }
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }


  
}