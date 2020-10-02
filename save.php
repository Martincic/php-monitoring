<?php
include('helpers.php');

$exists = checkIfExists($_SERVER["REMOTE_ADDR"]);
$link = connect();

if($exists) //Get count of attempts
{
	$sql="select count(*) as total from blocked WHERE ip LIKE ?";
	$link->prepare($sql);
	$result=mysqli_query($link,$sql);
	$data=mysqli_fetch_assoc($result);
	echo "DATAA: " . $data;
}
	// prepare and bind
	$stmt = $link->prepare("INSERT INTO blocked(ip, user_agent, port, lang, fail_count) VALUES (?, ?, ?, ?, ?);");
	$stmt->bind_param("ssisi", $ip, $user_agent, $port, $language, $attempt_count);

	// set parameters and execute
	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$port = $_SERVER['REMOTE_PORT'];
	$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	$attempt_count = $data['total'] ?? 0;

	$stmt->execute();
	$stmt->close();
$link->close();

?>
