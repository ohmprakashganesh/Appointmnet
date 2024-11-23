<?php
require_once "../config/database.php";

require_once "../model/Visitor.php";
class VisitorController{

private $db;
private $visitor;
  



    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->visitor= new Visitor($this->db);
    }



    public  function listVisitors(){

        $stmt = $this->visitor->read();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      print_r($data) ;

    }
}