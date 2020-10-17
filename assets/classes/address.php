<?php
/*
* Mysql database class - only one connection alowed
*/
class Address {
    /* Attributes */
	public $country = null;
	public $country_code = null;
	public $region_name = null;
	public $city = null;
	public $zip = null;
	public $lat = null;
	public $lon = null;
	public $timezone = null;
	public $isp = null;
	public $asp = null;
	public $created_at = null;

	// Constructor
	function __construct($ip) {
        $db = Database::getInstance();
        $link = $db->getConnection();
        $sql = "SELECT * FROM addresses WHERE ip LIKE ?;";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("s", $ip);
        $stmt->execute();
        $result = $stmt->get_result();
        $record = $result->fetch_assoc();
        
        $record = $record ?? null;

        $link = $db->closeConnection();

        if($record) {
            $this->country = $record['country'] ?? null;
            $this->country_code = $record['country_code'] ?? null;
            $this->region_name = $record['region_name'] ?? null;
            $this->city = $record['city'] ?? null;
            $this->zip = $record['zip'] ?? null;
            $this->lat = $record['lat'] ?? null;
            $this->lon = $record['lon'] ?? null;
            $this->timezone = $record['timezone'] ?? null;
            $this->isp = $record['isp'] ?? null;
            $this->asp = $record['as'] ?? null;
            $this->created_at = $record['created_at'] ?? null;
            return $this;
        }
        else return $this->newAddress($ip);
    }
    
    //TODO: Create new address here
    public function newAddress($ip)
    {
        return $this;
    }
    
}
