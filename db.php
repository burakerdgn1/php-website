<?php

require "config/constants.php";

$servername = "localhost";
$username = "root";
$password = "";
$db = "pikap_store";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>