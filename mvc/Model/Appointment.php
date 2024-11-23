<?php
class Appointment {
    private $conn;
    private $table_name = "appointments";

    public $id;
    public $officer_id;
    public $visitor_id;
    public $name;
    public $status;
    public $date;
    public $start_time;
    public $end_time;
    public $added_on;
    public $last_updated_on;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (officer_id, visitor_id, name, status, date, start_time, end_time, added_on)
                  VALUES (:officer_id, :visitor_id, :name, :status, :date, :start_time, :end_time, NOW())";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":officer_id", $this->officer_id);
        $stmt->bindParam(":visitor_id", $this->visitor_id);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":start_time", $this->start_time);
        $stmt->bindParam(":end_time", $this->end_time);

        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

}
