<?php
function execQuery($query)
{
    $host = $_ENV["HOST"];
    $username = $_ENV["USERNAME"];
    $password = $_ENV["PASSWORD"];
    $dbname = $_ENV["DBNAME"];
    $conn = new mysqli($host, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($query);
    $conn->close();

    return $result;
}
?>