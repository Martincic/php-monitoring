<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($_SERVER['REQUEST_METHOD'] === "POST") {
	if($username === "masge" && $password === "owen10") echo true;
	else {
		include('save.php');
		echo "Wrong credentials!";
	}
}
?>

<html>
	<body>
		<form action="" method="POST">
  			<label for="username">First name:</label><br>
  			<input type="text" id="username" name="username"><br>
  			<label for="password">Last name:</label><br>
  			<input type="password" id="password" name="password"><br><br>
  			<input type="submit" value="Submit">
		</form>
	</body>
</html>

