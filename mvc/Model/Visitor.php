<?php
class Visitor{
 private $conn;
 private $table_name='visitors';



    public $name;
    public $mobile_no;
    public $email;
    public $status;


public function __construct($db){
    $this->conn=$db;

}


public function create() {
    $query="INSERT INTO ".$this->table_name."(Email_Address,Name,Mobile_No,Status) VALUES (:Email,:name,:mobile_no,'Active')";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":Email_Address", $this->email);
    $stmt->bindParam(":Name",$this->name);
    $stmt->bindParam(":Mobile", $this->mobile_no);
    $stmt->bindParam(":Status",$this->status);
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

public function Activate() {
    $query = "UPDATE " . $this->table_name . " SET status = :status WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":status", $this->status);
    return $stmt->execute();
}
 public function appointments($id){
 }
 
}








?>
