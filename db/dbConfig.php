<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce-sportswear";

$con = new mysqli($host, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
// echo "Connected successfully";

return $con;

