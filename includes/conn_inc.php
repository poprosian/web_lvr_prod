<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "livamproduse";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connection_error);
}


?>