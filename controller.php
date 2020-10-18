<?php
include('autoload.php');
include('assets/include-bootstrap.php');
if($_SERVER['REMOTE_ADDR'] == $_SERVER['ADDR']) 
{
    if($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        if(($_POST['username'] == env('username')) && ($_POST['password'] == env('password'))) 
        {
            $key = env('key');
            echo "
                <form action='switch.php' method='post' class='w-50 mt-5 mx-auto'>
                    <div class='form-group'>
                    <input id='key' name='key' value='${key}' hidden>
                    <button type='submit' class='btn btn-primary btn-lg btn-block'>SWITCH LIGHTS</button>
                </form>
            ";


        } else die("nothing here");
    }
    else die("nothing here");
}else die("ur not home");