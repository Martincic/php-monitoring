<?php
//Establish connection to database
function connect() {
	$mysqli = mysqli_connect("localhost", "root", "owen10", "martincic_dev");

	if ($link === false) { 
		die("ERROR: Could not connect. " . mysqli_connect_error()); 
	} 
	return $mysqli;
}

//Check if IP exists in records
function checkIfExists($ip) {
	$link = connect();

	$sql = "SELECT * FROM blocked WHERE ip LIKE ?;";
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
?>