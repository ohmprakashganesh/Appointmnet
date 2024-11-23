<?php 
require_once "../config/database.php";

require_once "../model/Appointment.php";

class AppointmentController{

 private $db;
 private $appointment;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->appointment = new Appointment($this->db);
    }




    public  function listAppointments(){
        $stmt = $this->appointment->read();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      print_r($data) ;

    }
}