<?php
include(dirname(__DIR__).'../autoload.php');

$db_host = env('DB_HOST');
$db_username = env('DB_USERNAME');
$db_password = env('DB_PASSWORD');
$db_name = env('DB_NAME');

//Establish connection to database 
function connect() {
	global $db_host, $db_username, $db_password, $db_name;
	$mysqli = mysqli_connect($db_host, $db_username, $db_password, $db_name);


	if ($mysqli === false) { 
		die("ERROR: Could not connect. " . mysqli_connect_error()); 
	} 
	return $mysqli;
}

//Check if IP exists in records
function checkIfExists($ip) {
	$link = connect();

	$sql = "SELECT * FROM addresses WHERE ip LIKE ?;";
	$stmt = $link->prepare($sql);
	$stmt->bind_param("s", $ip);
	$stmt->execute();
	$result = $stmt->get_result();
	$record = $result->fetch_assoc();
	
	$record = $record ?? null;

	mysqli_close($link);

	if($record) return true;
	else return false;
}

function getLocation($ip) {
	$url = 'http://ip-api.com/json/' . $ip;
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, [
		'Content-Type: application/json'
	]);

	$response = curl_exec($curl);
	curl_close($curl);
	return json_decode($response . PHP_EOL);
}
