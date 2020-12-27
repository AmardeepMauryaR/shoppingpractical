<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "shoppingcart";

// Create Connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check Connection
if (!$con) {
	die("Connection failed: " .mysqli_connect_error());
}

?>