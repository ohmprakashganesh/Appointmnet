<?php
class Post {
    private $conn;
    private $table_name = "posts";

   
    public $name;
    public $status;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (name, status) VALUES (:name, 'Active')";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindparam(":status",$this->status);
        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET name = :name WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $this->name);
        return $stmt->execute();
    }

    public function changeStatus($status) {
        $query = "UPDATE " . $this->table_name . " SET status = :status WHERE name = :name";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":status", $status);
        return $stmt->execute();
    }
}
