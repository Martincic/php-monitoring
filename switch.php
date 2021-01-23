<?php
include('autoload.php');
include('assets/include-bootstrap.php');

error_reporting(E_ALL);

//You can also report all errors by using -1
error_reporting(-1);
echo 0;

//If you are feeling old school
ini_set('error_reporting', E_ALL);

if($_SERVER['REQUEST_METHOD'] == "POST") 
{
    echo 1;
    if($_POST['key'] == env('key')) 
    {
        echo 2;
        if(isset($_POST['range'])) {
            echo 3;
            $temp=$_POST['range'];
            $status = shell_exec("python3 settemp.py ".$temp);
            echo "Temp namjestena na ". $temp. " stupnja. STATUS: ".$status;
            include('setConfig.php');
	    }
        $num = $_POST['light'] ?? 0;

        $state = exec("gpio -g read ". $num);
        //invert
        if($state == "1") {
            $state = "0";
        }
        else{
            $state = "1";
        }
        
        shell_exec("gpio -g mode ". $num." out");
        shell_exec("gpio -g write ". $num." ".$state);   
        
        //loop back here
        echo 3.5;
        include('assets/login.php');
        echo 4;
        include('assets/saveLogin.php');
    }
}

?>


