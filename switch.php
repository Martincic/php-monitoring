<?php
include('autoload.php');


if($_SERVER['REQUEST_METHOD'] == "POST") 
{
    if($_POST['key'] == env('key')) 
    {
        
        //read
        $state = exec("gpio -g read 17");
        
        //invert
        if($state == "1") $state = "0";
        else $state = "1";

        //output
        shell_exec("gpio -g mode 17 out");
        shell_exec("gpio -g write 17 ".$state);   

        //loop back here
        $key = env('key');
        echo "
            <form action='switch.php' method='post'>
                <input id='key' name='key' value='${key}'>
                <input type='submit' value='SWITCH THE LIGHTS'>
            </form>
        ";

    } else die("nothing here");
}
else die("nothing here");