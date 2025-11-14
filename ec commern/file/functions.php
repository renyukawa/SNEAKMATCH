<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$conn = new mysqli('localhost', 'nishida', 'security', 'kutu');
function login_user($email, $password)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE email = '{$email}'";
    $res = $conn->query($sql);
    if ($res->num_rows < 1) {
    return false;
    }

   $row = $res->fetch_assoc();

    if (!password_verify($password, $row['password'])) {
    return false;
    }
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charsLength = strlen($chars);
    $randomString = '';

    for ($i = 0; $i < 20; $i++) {
        $randomString .= $chars[mt_rand(0, $charsLength - 1)];
    }
    return $randomString;

    $_SESSION['user'] = $row;

return true;
}
?>