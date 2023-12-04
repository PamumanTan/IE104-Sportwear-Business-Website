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

function payOrder($user_id) {
    $query = "update orders set payed = 1 where user_id = " . $user_id . " and payed = 0";
    $result = execQuery($query);
    if ($result) {
        return [
            'message' => 'Pay order successfully',
            'error' => false
        ];
    }
    return [
        'message' => 'Pay order failed',
        'error' => true
    ];
}

echo json_encode(payOrder($user_id));