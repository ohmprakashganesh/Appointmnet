<?php
require_once "../config/database.php";

require_once "../model/Visitor.php";
class VisitorController{

private $db;
private $visitor;

public $name;
public $mobileNo;
public $email;
public $status;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->visitor= new Visitor($this->db);
    }
    public  function listVisitors(){
        $stmt = $this->visitor->read();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include "../View/Visitor/Main.php";
    }
     public function createVisitor($name,$mobile,$email,$status){
     $this->name=$name;
     $this->mobileNo=$mobile;
     $this->email=$email;
     $this->status=$status;
     $this->visitor->create();
     }

     public function updateVisitor($id,$name){
      $this->name= $name;
      $data=$this->visitor->update($id);
     }

     public function viewAppointments($id){
        $this->visitor->appointments($id);
     }

}