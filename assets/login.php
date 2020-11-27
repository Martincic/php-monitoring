<?php
    
    $key = env('key');

    //read
    $state1 = exec("gpio -g read 17");
    $color1 = "";
    
    $state2 = exec("gpio -g read 27");
    $color2 = "";

    //invert
    if($state1 == "1") {
        $state1 = "0";
        $color1 = "btn-success";
    }
    else{
        $state1 = "1";
        $color1 = "btn-danger";
    }

    //invert
    if($state2 == "1") {
        $state2 = "0";
        $color2 = "btn-success";
    }
    else{
        $state2 = "1";
        $color2 = "btn-danger";
    }
?>

<form action='switch.php' method='post' class='w-50 mt-5 mx-auto'>
    <div class='form-group'>
    <input id='key' name='key' value='<?php echo $key ?>' hidden>
    <input id='light' name='light' value='1' hidden>
    <button type='submit' class='btn <?php echo $color1 ?> btn-lg btn-block'>Strop svjetlo</button>
</form>

<form action='switch.php' method='post' class='w-50 mt-5 mx-auto'>
    <div class='form-group'>
    <input id='key' name='key' value='<?php echo $key ?>' hidden>
    <input id='light' name='light' value='2' hidden>
    <button type='submit' class='btn <?php echo $color2 ?> btn-lg btn-block'>Stol svijetlo</button>
</form>