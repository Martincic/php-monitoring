<?php
include('helpers.php');

$exists = checkIfExists($_SERVER["REMOTE_ADDR"]);
$link = connect();

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
