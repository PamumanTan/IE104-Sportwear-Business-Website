<?php

function connectDb() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce-sportswear";

    $con = new mysqli($host, $username, $password, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    return $con;
}

function closeConnectDb($con) {
    $con->close();
}

function execQuery($query)
{
    $conn = connectDb();
    $result = $conn->query($query);
    closeConnectDb($conn);
    return $result;
}