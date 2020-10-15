<?php
include('helpers.php');

$exists = checkIfExists($_SERVER["REMOTE_ADDR"]);
$link = connect();

if($exists) //Get count of attempts
{
	$stmt = $link->prepare("select * from blocked WHERE ip LIKE ?");
	$stmt->bind_param('s', $_SERVER['REMOTE_ADDR']);
	$stmt->execute();

	$result = $stmt->get_result();
	$row = $result->fetch_array(MYSQLI_ASSOC);
	$stmt->close();
}

	// prepare and bind
	$stmt = $link->prepare("INSERT INTO blocked(ip, user_agent, port, lang, fail_count) VALUES (?, ?, ?, ?, ?);");
	$stmt->bind_param("ssisi", $ip, $user_agent, $port, $language, $attempt_count);

	// set parameters and execute
	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$port = $_SERVER['REMOTE_PORT'];
	$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$attempt_count = $result->num_rows ?? 0;

	$stmt->execute();
	$stmt->close();
$link->close();

#echo getLocation($_SERVER['REMOTE_ADDR']);
?>
