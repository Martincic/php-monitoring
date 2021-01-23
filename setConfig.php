<?php
include('autoload.php');

    if($_POST['key'] === 'fTjWnZr4u7x!A%D*G-KaNdRgUkXp2s5v') 
    {
       echo 1;
        $link = new mysqli(env('DB_HOST'), env('DB_USERNAME'), env('pwd'), env('DB_NAME'));
        $stmt = $link->prepare("INSERT INTO config (temp) VALUES (?);");
        $stmt->bind_param("s", $temp);

        $status = $stmt->execute();
        $link->close();
    }
?>
