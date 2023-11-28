<?php 
include('../db/connection.php');
if (isset($_GET['action']) && $_GET['action'] == 'get-all') {
    $query = "SELECT * FROM comments";
    $result = execQuery($query);
    $comments = [];
    if ($result) {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    }

    $res = [
        'error' => false,
        'message' => 'success',
        'data' => $rows
    ];
    echo json_encode($rows);
    return;
} else {
    $res = [
        'error' => true,
        'message' => 'error'
    ];
    echo json_encode($res);
    return;
}