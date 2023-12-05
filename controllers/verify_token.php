<?php

function checkAuthorization($execQuery, $verifyToken) {
    if (isset($_COOKIE['access_token'])) {
    
        $KEY = "secret";
        $token = $_COOKIE['access_token'];
        $payload = $verifyToken($token, $KEY);

        if (!$payload) {
            return null;
        }

        $query = "select * from users where id=" . $payload['id'];
        $execQuery($query);
        $result = execQuery($query);

        if (!$result) {
            return null;
        }

        $row = $result->fetch_assoc();
        return [
            "user_id" => $row['id'],
            "is_admin" => $row['is_admin']
        ];
    } else {
        return null;
    }
};
?>