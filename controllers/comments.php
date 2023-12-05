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
        'message' => 'Xem bình luận thành công',
        'data' => $rows
    ];
    echo json_encode($rows);
    return;
} else {
    $res = [
        'error' => true,
        'message' => 'Xem bình luận thất bại'
    ];
    echo json_encode($res);
    return;
}