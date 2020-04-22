<?php

error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", true);
ini_set("log_errors", true);
ini_set("error_log", "backend/logger.log");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rgb-game";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");