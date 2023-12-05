<?php
include '../helpers/jwt.php';
include '../db/connection.php';

// Authorize
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    echo "Sai phương thức";
    return;
}

function payOrder($user_id) {
    // Get data from request body
    $data = json_decode(file_get_contents('php://input'), true);

    // check if data is valid 
    if (!(isset($data['phonenumber']) && $data['phonenumber'] 
        && isset($data['address']) && $data['address'] 
        && isset($data['firstname']) && $data['firstname'] 
        && isset($data['lastname']) && $data['lastname'])) {
        return [
            'message' => 'Vui lòng nhập đầy đủ thông tin',
            'error' => true
        ];
    }


    // get phonenumber, address, note from request body
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $phonenumber = $data['phonenumber'];
    $address = $data['address'];

    if (isset($data['note'])) {
        $note = $data['note'];
    } else {
        $note = '';
    }

    // find if there is any order that is not payed
    $query = "select * from orders where user_id = " . $user_id . " and payed = 0";
    $result = execQuery($query);

    if (!$result || $result->num_rows == 0) {
        return [
            'message' => 'Không có đơn hàng để thanh toán',
            'error' => true
        ];
    }

    // pay order
    $query = "update orders set payed = 1, 
        shipping_phonenumber = '" . $phonenumber . "', 
        shipping_address = '" . $address . "', 
        shipping_note = '" . $note . "', 
        shipping_firstname = '" . $firstname . "', 
        shipping_lastname = '" . $lastname . "' 
        where user_id = " . $user_id . " and payed = 0";
    $result = execQuery($query);

    if ($result) {
        return [
            'message' => 'Thanh toán thành công',
            'error' => false
        ];
    }

    return [
        'message' => 'Thanh toán thất bại',
        'error' => true
    ];
}

echo json_encode(payOrder($user_id));