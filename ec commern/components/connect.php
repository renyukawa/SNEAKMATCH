<?php

$localhost = '192.168.25.125';
$user_name = 'nishida';
$user_password = 'security';
$db_name = 'kutu';

$conn = new PDO("mysql:host=$localhost;dbname=$db_name", $user_name, $user_password);
// 上のコードみんなが使えるようにした。

if ($conn) {
    echo "";
}
function unique_id() {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charsLength = strlen($chars);
    $randomString = '';

    for ($i = 0; $i < 20; $i++) {
        $randomString .= $chars[mt_rand(0, $charsLength - 1)];
    }
    return $randomString;
}
?>