<?php
// delete cookies
setcookie('access_token', '', time() - 3600, '/', '', true, true);
echo json_encode([
    'message' => 'Logout successfully',
    'error' => false
]);
