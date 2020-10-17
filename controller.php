<?php
include('autoload.php');

if($_SERVER['REQUEST_METHOD'] == "POST") 
{
    if(($_POST['username'] == env('username')) && ($_POST['password'] == env('password'))) 
    {
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