<?php
$host = "localhost";
$db = "ems";

$user = "root";
$pass = "";

try
{
	$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
	
	// echo "conntected";
}

catch(PDOException $e)
{
	die("Connection Failed ". $e->getMessage());
}


?>