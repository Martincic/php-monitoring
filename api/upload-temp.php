<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../assets/helpers.php');
include('../assets/../database/database.php');

if($_SERVER['REQUEST_METHOD'] == "POST") 
{
    if($_POST['key'] === 'fTjWnZr4u7x!A%D*G-KaNdRgUkXp2s5v') 
    {
        echo "KEY MATCHING";
	$db = Database::getInstance();
	$link = $db->getConnection();
        $stmt = $link->prepare("INSERT INTO temperature (temp, humidity) VALUES (?, ?);");
        $stmt->bind_param("ss", $temp, $humid);

	$temp = $_POST['temp'] ?? null;
	$humid = $_POST['humid'] ?? null;

        $stmt->execute();
        $stmt->close();
	$link = $db->closeConnection();
        echo "SUCCESS";
    }
}
