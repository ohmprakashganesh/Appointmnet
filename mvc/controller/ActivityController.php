<?php
require_once "../config/database.php";

require_once "../model/Activity.php";
class ActivityController{
    private $db;
    private $activity;



    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->activity = new Activity($this->db);
    }
    
   public  function listActivities(){
    $obj=$this->activity->read();
    $data= $obj->fetchAll(PDO::FETCH_ASSOC);
    include "../View/Activity/Main.php";

  
   }
}