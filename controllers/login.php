<?php
// session_start();
require '../helpers/jwt.php';
require '../db/connection.php';

if (isset($_POST['phonenumber']) && isset($_POST['password']) && $_POST['phonenumber'] != "" && $_POST['password'] != "") {
    
    $query = "select * from users where phonenumber=" . $_POST['phonenumber'] . " and PASSWORD='" . $_POST['password'] . "'";
    $result = execQuery($query);
    if ($result) {
        $row = $result->fetch_assoc();
        $payload = [
            'id' => $row['id'],
            'is_admin' => $row['is_admin']
        ];
        $token = Token::Sign($payload, 60 * 5);

        // Set the cookie
        $sameSite = 'Strict';
        $secure = true; 
        $httpOnly = true;
        $expirationTime = time() + (60 * 60 * 60);
        setcookie('access_token', $token, $expirationTime, '/', '', $secure, $httpOnly);

        $res = (object) [
            'message' => 'Login successfully',
            'error' => false
        ];

        $jsonRes = json_encode($res);
        echo $jsonRes;
    } else {
        $res = (object) [
            'message' => 'Wrong phonenumber or password',
            'error' => true
        ];

        $jsonRes = json_encode($res);
        echo $jsonRes;
    }
} else {
    $res = (object) [
        'message' => 'Not enough credentials',
        'error' => true,
        'data' => (isset($_POST['phonenumber']) ? 1 : 0) . (isset($_POST['password']) ? 1 : 0)
    ];

    $jsonRes = json_encode($res);
    echo $jsonRes;
}