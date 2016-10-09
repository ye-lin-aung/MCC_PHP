<?php
$server = "127.0.0.1";
define("USER_NAME", "root");
define("PASSWORD","root");
try {	$conn = new PDO("mysql:host=$server;dbname=learnforlife", USER_NAME, PASSWORD);$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}catch(PDOException $e){}?>
