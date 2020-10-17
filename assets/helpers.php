<?php
include(dirname(__DIR__).'../autoload.php');

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
