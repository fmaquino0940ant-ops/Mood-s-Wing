<?php
session_start();
ini_set("display_errors", 1);
error_reporting(E_ALL);
$server = "localhost";
$username = "root";
$password = "";
$database = "moodswing";
$con = new mysqli($server, $username, $password, $database);
?>