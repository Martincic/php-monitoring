<?php
$db = Database::getInstance();

$link = $db->getConnection();

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	// prepare and bind
	$stmt = $link->prepare("INSERT INTO login_attempts (ip, username, password) VALUES (?, ?, ?);");
	$stmt->bind_param("sss", $ip, $username, $password);
	
	// set parameters and execute
	$ip = $_SERVER['REMOTE_ADDR'];
	$username = $_POST['username'] ?? null;
	$password = $_POST['password'] ?? null;
	
	$stmt->execute();
	$stmt->close();
}
$link = $db->closeConnection();
