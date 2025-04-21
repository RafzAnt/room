<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "g_7";

$con = new mysqli($host, $user, $pass, $dbname);


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    // Connection successful, no need to echo message
    // echo "Connected successfully";
}

?>
