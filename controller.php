<?php
include('autoload.php');
include('assets/include-bootstrap.php');
#include('assets/save.php');


if($_SERVER['REQUEST_METHOD'] == "POST") 
{
    if(($_POST['username'] == env('username')) && ($_POST['password'] == env('password'))) 
    {
        include('assets/login.php');
    } else {
        include('assets/saveLogin.php');
        //echo shell_exec("python /var/www/martincic-dev/assets/alert.py 2>&1");
    }
}
die();
?>
