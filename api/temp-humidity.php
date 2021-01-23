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
        // echo "KEY MATCHING";
	$db = Database::getInstance();
	$link = $db->getConnection();
        $sql = "SELECT temp, humidity FROM temperature ORDER BY id DESC LIMIT 0, 1";
        $result = $link->query($sql);

        $temp = $result->fetch_assoc();

	$link = $db->closeConnection();
        
        echo json_encode([
                'temp' => $temp['temp'],
                'humid' => $temp['humidity']
        ]);
    }
}
