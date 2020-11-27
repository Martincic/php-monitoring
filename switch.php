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
        //invert
        if($state == "1") {
            $state = "0";
        }
        else{
            $state = "1";
        }

        shell_exec("gpio -g mode ". $num."7 out");
        shell_exec("gpio -g write ". $num."7 ".$state);   

        //loop back here
        include_once('assets/login.php');
        include('assets/saveLogin.php');

    } else die("nothing here");
}
else die("nothing here");
