<?php 

class Officer{

    private $table_name="officers";
    private $conn;

    public function __construct($db){
        $this->conn=$db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function create(){

    }
    public function  update($id, $data){

    }
    public function  status(){

    }
    public function  appointments(){
        
    }



}