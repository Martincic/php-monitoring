<?php
include(dirname(__DIR__).'/autoload.php');
/*
* Mysql database class - only one connection alowed
*/
class Database {
	private $_connection;
	private static $_instance; //The single instance
	private $_host = null;
	private $_username = null;
	private $_password = null;
	private $_database = null;

	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	// Constructor
	private function __construct() {
        $this->_host = env('DB_HOST');
        $this->_username = 'root';
        $this->_password = 'owen10';
        $this->_database = 'martincic_dev';
	}

	// Get mysqli connection
	public function getConnection() {
        $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysqli_connect_error(),
                E_USER_ERROR);
        }
		return $this->_connection;
    }
    
    // Close mysqli connection
	public function closeConnection() {
        //$this->_connection->close();
		return $this->_connection->close();
    }
    
    
    //Check if IP exists in records
    function checkIfExists($ip) {
        $link = $this->getConnection();

        $sql = "SELECT * FROM addresses WHERE ip LIKE ?;";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("s", $ip);
        $stmt->execute();
        $result = $stmt->get_result();
        $record = $result->fetch_assoc();
        
        $record = $record ?? null;

        $link = $this->closeConnection();

        if($record) return true;
        else return false;
    }
}
