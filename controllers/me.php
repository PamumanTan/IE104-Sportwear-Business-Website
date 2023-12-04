<?php
include '../helpers/jwt.php';
include '../db/connection.php';

// Authorize
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_COOKIE['access_token'])) {
        echo json_encode([
            'message' => 'Unauthenticated',
            'error' => true
        ]);
        return;
    }

    $token = $_COOKIE['access_token'];
    $payload = Token::Verify($token);
    $user_id = $payload['id'];

    if (!$user_id) {
        echo json_encode([
            'message' => 'Unauthenticated',
            'error' => true
        ]);
        return;
    }
} else {
    echo "Wrong request method";
    return;
}

function getUserInfo($user_id) {
    $query = "select * from users where id = " . $user_id;
    $result = execQuery($query);
    if ($result) {
        $row = $result->fetch_assoc();
        return [
            'message' => 'Get user info successfully',
            'error' => false,
            'data' => $row
        ];
    }
    return [
        'message' => 'Get user info failed',
        'error' => true
    ];
}

echo json_encode(getUserInfo($user_id));