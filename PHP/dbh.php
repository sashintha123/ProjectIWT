<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "rlec";

global $conn;
$conn = new mysqli($server, $username, $password, $dbname);

?>