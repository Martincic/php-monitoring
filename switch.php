<?php
include('autoload.php');
include('assets/include-bootstrap.php');

if($_SERVER['REQUEST_METHOD'] == "POST") 
{
    if($_POST['key'] == env('key')) 
    {
        $num = $_POST['light'];
        //output
        $state = exec("gpio -g read ". $num."7");

        shell_exec("gpio -g mode ". $num."7 out");
        shell_exec("gpio -g write ". $num."7 ".$state);   
        //loop back here
        $key = env('key'); 
        include('assets/saveLogin.php');

    } else die("nothing here");
}
else die("nothing here");
