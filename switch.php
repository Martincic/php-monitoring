<?php
include('autoload.php');
include('assets/include-bootstrap.php');
echo 0;

error_reporting(E_ALL);

//You can also report all errors by using -1
error_reporting(-1);

//If you are feeling old school
ini_set('error_reporting', E_ALL);

if($_SERVER['REQUEST_METHOD'] == "POST") 
{
    if($_POST['key'] == env('key')) 
    {
        if(isset($_POST['range'])) {
		$temp=$_POST['range'];
		$status = shell_exec("python3 settemp.py ".$temp);
		echo "Temp namjestena na ". $temp. " stupnja. STATUS: ".$status;
		include('setConfig.php');
	}
    echo 1;
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
        echo 2;

        //loop back here
       
	include('assets/login.php');
	include('assets/saveLogin.php');
echo 3;
       
    }
}
echo 4;

?>


