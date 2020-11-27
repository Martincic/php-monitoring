<?php
include(__DIR__.'/helpers.php');
include(__DIR__.'/../database/database.php');
include(__DIR__.'/classes/address.php');

$db = Database::getInstance();

$exists = $db->checkIfExists($_SERVER["REMOTE_ADDR"]);
$link = $db->getConnection();

if(!$exists)
{
	
	$geolocation = getLocation($_SERVER["REMOTE_ADDR"]);
	$stmt = $link->prepare("INSERT INTO addresses (ip, country, country_code, region_name, city, zip, lat, lon, timezone, isp, asp) VALUES (?,?,?,?,?,?,?,?,?,?,?);");
	$stmt->bind_param("sssssssssss", $ip, $country, $country_code, $region_name, $city, $zip, $lat, $lon, $timezone, $isp, $asp);
	
	// set parameters and execute
	$ip = $_SERVER['REMOTE_ADDR'];
	$country = $geolocation->country ?? null;
	$country_code = $geolocation->country_code ?? null;
	$region_name = $geolocation->region_name ?? null;
	$city = $geolocation->city ?? null;
	$zip = $geolocation->zip ?? null;
	$lat = $geolocation->lat ?? null;
	$lon = $geolocation->lon ?? null;
	$timezone = $geolocation->timezone ?? null;
	$isp = $geolocation->isp ?? null;
	$asp = $geolocation->as ?? null;

	$stmt->execute();
	$stmt->close();
}
	// prepare and bind
	$stmt = $link->prepare("INSERT INTO visits (`ip`, `request_method`, `slug`, `user_agent`, `port`, `lang`) VALUES (?, ?, ?, ?, ?, ?);");
	$stmt->bind_param("ssssis", $ip, $request_method, $slug, $user_agent, $port, $language);
	
	// set parameters and execute
	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$port = $_SERVER['REMOTE_PORT'];
	$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$request_method = $_SERVER['REQUEST_METHOD'];
	$slug = $_SERVER['REQUEST_URI'];

	$stmt->execute();
	$stmt->close();
$link = $db->closeConnection();
//shell_exec("python /var/www/martincic-dev/assets/buzzer.py 2>&1");
