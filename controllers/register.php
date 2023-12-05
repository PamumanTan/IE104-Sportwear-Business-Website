<?php
require '../helpers/jwt.php';
require '../db/connection.php';

function register() {
    // $firstname = $_POST['firstname'];
    // $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $verify = $_POST['verify'];

    // username, password, phonenumber, verify password must not be empty
    if ($username == "" || $phonenumber == "" || $password == "" || $verify == "") {
        echo json_encode([
            'message' => 'Vui lòng nhập đầy đủ thông tin',
            'error' => true
        ]);
        return;
    }

    if ($password != $verify) {
        echo json_encode([
            'message' => 'Mật khẩu không khớp',
            'error' => true
        ]);
        return;
    }

    $query = "select * from users where phonenumber=" . $phonenumber;
    $result = execQuery($query);
    if ($result && $result->num_rows > 0) {
        echo json_encode([
            'message' => 'Số điện thoại đã được đăng ký',
            'error' => true
        ]);
        return;
    }

    // hash password before saving using bcrypt
    $password = password_hash($password, PASSWORD_BCRYPT);

    $query = "insert into users (username, phonenumber, password) values ('$username', '$phonenumber', '$password')";
    $result = execQuery($query);
    if ($result) {
        echo json_encode([
            'message' => 'Đăng ký thành công',
            'error' => false
        ]);
        return;
    } else {
        echo json_encode([
            'message' => 'Đăng ký thất bại',
            'error' => true
        ]);
        return;
    }

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    register();
} else {
    echo json_encode([
        'message' => 'Method not allowed',
        'error' => true
    ]);
    return;
}