<html>
   <head>
	<title>Martincic.dev</title>
   </head>
   <body>
	<h1> Hello World! </h1>
   </body>
</html>
<?php
   	echo shell_exec("python /var/www/martincic-dev/buzzer.py 2>&1");
	include('save.php');
?>
