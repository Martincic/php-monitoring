<?php

$conn = new mysqli('localhost', 'root', 'owen10', 'martincic_dev');
$sql1 = "SELECT temp FROM temperature ORDER BY id DESC LIMIT 0, 1";
$result = $conn->query($sql1);
$row = $result->fetch_assoc();


echo $row['temp'];
$conn->close();
?>
