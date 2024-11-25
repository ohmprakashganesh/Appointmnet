<?php 
require_once '../Config/Database.php';
require_once '../Model/Officer.php';
class OfficerController{


private $officer;
private $db;
    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->officer = new Officer($this->db);
    }

    public  function ListOfficers(){
        $stmt = $this->officer->read();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include "../View/Officer/Main.php";
        

    }

}