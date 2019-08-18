<?php
$config = parse_ini_file('configs/database.ini');

$conn = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['dbname']);

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connection_error);
}


?>