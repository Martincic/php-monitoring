<?php
include(__DIR__.'/helpers.php');
include(__DIR__.'/../database/database.php');

$db = Database::getInstance();
$link = $db->getConnection();
$sql = "SELECT temp FROM config ORDER BY id DESC LIMIT 0, 1";
$result = $link->query($sql);

$temp = $result->fetch_assoc();

echo $temp['temp'];
$db->closeConnection();
?>
