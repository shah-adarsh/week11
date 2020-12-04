<?php
$servername = "localhost";
$username = "student";
$password = "website";
$dbasename = "firstlab";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbasename);

// check connection
if($mysqli->connect_error) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
	}
?>
