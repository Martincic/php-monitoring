<?php
include('autoload.php');
include('assets/include-bootstrap.php');

if($_SERVER['REQUEST_METHOD'] == "POST") 
{
    if($_POST['key'] == env('key')) 
    {
        
        //read
        $state = exec("gpio -g read 17");
        $color = "";

        //invert
        if($state == "1") {
            $state = "0";
            $color = "btn-success";
        }
        else{
            $state = "1";
            $color = "btn-danger";
        }

        //output
        shell_exec("gpio -g mode 17 out");
        shell_exec("gpio -g write 17 ".$state);   

        //loop back here
        $key = env('key'); 
        echo "
            <form action='switch.php' method='post' class='w-50 mt-5 mx-auto'>
                <div class='form-group'>
                <input id='key' name='key' value='${key}' hidden>
                <button type='submit' class='btn ${color} btn-lg btn-block'>SWITCH LIGHTS</button>
            </form>
        ";

    } else die("nothing here");
}
else die("nothing here");