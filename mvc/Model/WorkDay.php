

<?PHP
class workDays {
    private $conn;
    private $table_name = "posts";

   
    public $DayOfWeek;
    public $officerId;

    public function __construct($db) {
        $this->conn = $db;
    }

   
}
