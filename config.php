<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "mydb_1";

#$dbconfig = mysqli_connect($host, $user, $password, $dbname);

try {
    $conn = new PDO("mysql:host=$host;dbname=mydb_1", $user, $password);
    // set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>