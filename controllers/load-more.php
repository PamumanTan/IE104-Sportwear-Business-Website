<?php

use function PHPSTORM_META\type;

include "../db/connection.php";
$query = "SELECT id, product_image, product_name, product_price FROM products ";
$object = $_POST['object'];
$type = $_POST['type'];
$page = $_POST['page'];

if ($object != 'null' && $type != 'null') {
    $query .= " where product_object_id = " . $object . " and product_type_id = " . $type;
} else if ($object != 'null') {
    $query .= " where product_object_id = " . $object;
} else if ($type != 'null') {
    $query .= " where product_type_id = " . $type;
} else {
    $query .= " where 1";
}

$query .= " limit " . $page * 12 . ", 12";
$result = execQuery($query);

if ($result->num_rows > 0) {
    $data = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else {
    echo "no data";
}
