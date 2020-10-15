<?php
include('helpers.php');

$exists = checkIfExists($_SERVER["REMOTE_ADDR"]);
$link = connect();

if(!$exists)
{
	echo "NE POSTOJIM!";
	$stmt = $link->prepare("INSERT INTO addresses (`ip`) VALUES (?, ?);");
	$stmt->bind_param("si", $ip, $count);

	// set parameters and execute
	$ip = $_SERVER['REMOTE_ADDR'];
	$count = 0;

	$stmt->execute();
	$stmt->close();
}
	// prepare and bind
	$stmt = $link->prepare("INSERT INTO visits (`ip`, `user_agent`, `port`, `lang`) VALUES (?, ?, ?, ?);");
	$stmt->bind_param("ssis", $ip, $user_agent, $port, $language);
	
	// set parameters and execute
	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$port = $_SERVER['REMOTE_PORT'];
	$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

	$stmt->execute();
	$stmt->close();
$link->close();

#echo getLocation($_SERVER['REMOTE_ADDR']);
$geolocation = getLocation($_SERVER['ADDR']);
print_r($geolocation);
0?>
