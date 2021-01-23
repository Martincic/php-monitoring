<?php
    $key = env('key');

    //read
    $state1 = exec("gpio -g read 17");
    $color1 = "";
    
    $state2 = exec("gpio -g read 27");
    $color2 = "";

    $state3 = exec("gpio -g read 22");
    $color3 = "";

    //invert
    if($state1 == "1") {
        $state1 = "0";
        $color1 = "btn-danger";
    }
    else{
        $state1 = "1";
        $color1 = "btn-success";
    }

    //invert
    if($state2 == "1") {
        $state2 = "0";
        $color2 = "btn-danger";
    }
    else{
        $state2 = "1";
        $color2 = "btn-success";
    }
    
    //invert
    if($state3 == "1") {
//WIP        $state3 = "0";
        $color3 = "btn-success";
    }
    else{
//wip        $state3 = "1";
        $color3 = "btn-danger";
    }
?>

<form action='switch.php' method='post' class='w-50 mt-5 mx-auto'>
    <input id='key' name='key' value='<?php echo $key ?>' hidden>
    <input id='light' name='light' value='27' hidden>
    <button type='submit' class='btn <?php echo $color2 ?> btn-lg btn-block'>Strop svjetlo</button>
</form>

<form action='switch.php' method='post' class='w-50 mt-5 mx-auto'>
    <input id='key' name='key' value='<?php echo $key ?>' hidden>
    <input id='light' name='light' value='17' hidden>
    <button type='submit' class='btn <?php echo $color1 ?> btn-lg btn-block'>Stol svijetlo</button>
</form>

<form action='switch.php' method='post' class='w-50 mt-5 mx-auto'>
    <input id='key' name='key' value='<?php echo $key ?>' hidden>
    <input id='light' name='light' value='22' hidden>
    <button type='submit' class='btn <?php echo $color3 ?> btn-lg btn-block'>Grijalica</button>
</form>


<form action='switch.php' method='post' class='w-50 mt-5 mx-auto'>
    <input id='key' name='key' value='<?php echo $key ?>' hidden>
    <input id='control' name='control' value='1' hidden>
<label for="temp">Odabrana temperatura: <span id='odabranaTemp'><?php include('read_temp.php') ?></span>°C</label>
<div class="slidecontainer">
  <input type="range" min="15" max="30" step="0.1" class="slider mb-3" id="range" name="range">
</div>
<button type='submit' class='btn btn-primary btn-lg btn-block'>Namjesti temp</button>
</form>

<div class="d-flex flex-column align-items-center justify-content-center mx-auto w-50">
    <p>Stvarna temperatura:</p><br>
    <div class="progress">
        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="50" id='stvarnaProgress'><span id='stvarna'><?php include('api/temp.php') ?></span>°C</div>
    </div>
    <p>Stvarna vlaga:</p><br>
    <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" id='vlagaProgress'><span id='vlaga'><?php include('api/humidity.php') ?></span>%</div>
    </div>
</div>

<script>
var slider = document.getElementById("temp");
var output = document.getElementById("odabranaTemp");
// output.innerHTML = slider.value; // Display the default slider value

//Update the current slider value (each time you drag the slider handle)
// slider.oninput = function() {
//   output.innerHTML = this.value;
// }

  var request = new XMLHttpRequest()

  // Open a new connection, using the GET request on the URL endpoint
  
  request.onload = function () {
      // Begin accessing JSON data here
    }
    
    
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    
    function updateData(element, data) {
        document.getElementById(element).innerHTML = data;
        document.getElementById(element+'Progress').setAttribute("aria-valuenow", 6); ;
    }
    
    async function reloadData() 
    {
        while(true){
            // Send request
            request.open('GET', 'https://martincic.dev/api/temp.php', true);
            request.send();
            request.open('GET', 'https://martincic.dev/api/humidity.php', true);
            request.send();

            console.log('request sent!');
            await sleep(2000);
        }
    }
    request.onload = function () {
        // Do something with the retrieved data ( found in xmlhttp.response )
        if(this.responseURL == 'https://martincic.dev/api/temp.php') {
            updateData('stvarna', this.responseText);
        }
        else {
            updateData('vlaga', this.responseText);
        }
    };

  reloadData();

</script>

<style>
.slidecontainer {
  width: 100%; /* Width of the outside container */
}

/* The slider itself */
.slider {
  -webkit-appearance: none;  /* Override default CSS styles */
  appearance: none;
  width: 100%; /* Full-width */
  height: 25px; /* Specified height */
  background: #d3d3d3; /* Grey background */
  outline: none; /* Remove outline */
  opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
  -webkit-transition: .2s; /* 0.2 seconds transition on hover */
  transition: opacity .2s;
}

/* Mouse-over effects */
.slider:hover {
  opacity: 1; /* Fully shown on mouse-over */
}

/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
.slider::-webkit-slider-thumb {
  -webkit-appearance: none; /* Override default look */
  appearance: none;
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #007bff; /* Green background */
  cursor: pointer; /* Cursor on hover */
}

.slider::-moz-range-thumb {
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #4CAF50; /* Green background */
  cursor: pointer; /* Cursor on hover */
}
</style>
