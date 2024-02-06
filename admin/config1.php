<?php
$server = "localhost";

$username = "root";

$password = "";

$db_name = "forelius_events"; // Database name

echo "hello";

$con = mysqli_connect($server, $username, $password, $db_name);
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "db connected successfully";
}

?>