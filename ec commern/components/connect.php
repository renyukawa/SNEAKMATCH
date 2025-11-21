<?php

$db_host = '192.168.25.125'; // ★他のPCのIPアドレス
$db_name = 'kutu';          // ★データベース名が 'kutu' であると仮定
$user_name = 'nishida';     // ★サーバー側で設定されているユーザー名
$user_password = 'security'; // ★サーバー側のパスワード（設定されていなければ空 ''）

$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $user_name, $user_password);


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