<html>
   <head>
	<title>Martincic.dev</title>
   </head>
   <body>
	<h1> Hello World! </h1>
   </body>
</html>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
   	#echo shell_exec("python /var/www/martincic-dev/assets/buzzer.py 2>&1");
	include('assets/save.php');
?>
