<html>
   <head>
	<title>Martincic.dev</title>
   </head>
   <body>
      <h1> Hello World! </h1>
      <p>You're probbably aware by now that I am backend dev.</p>
      <div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="en_US" data-type="horizontal" data-theme="light" data-vanity="tomas-martincic"><a class="LI-simple-link" href='https://hr.linkedin.com/in/tomas-martincic?trk=profile-badge'>Tomas Martincic</a></div>
      <img src="https://www.raspberrypi.org/app/uploads/2017/06/Powered-by-Raspberry-Pi-Logo_Outline-Colour-Screen-500x153.png">
   </body>
</html>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<?php
   ini_set('display_errors', '1');
   ini_set('display_startup_errors', '1');
   error_reporting(E_ALL);
   	#echo shell_exec("python /var/www/martincic-dev/assets/buzzer.py 2>&1");
	include('assets/save.php');
?>
