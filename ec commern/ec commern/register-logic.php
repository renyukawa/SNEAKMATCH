<?php
session_start();
require_once('file/functions.php');

$email = trim($_POST['email']);
$password = trim($_POST['password']);
$password_confirm = trim($_POST['password_confirm']);
$phone_number = trim($_POST['phone_number']);
$last_name = trim($_POST['last_name']);
$first_name = trim($_POST['first_name']);

if ($password != $password_confirm) {
    alert('danger', 'Password did not match');
    header("Location: login.php");
    exit;
}

$sql = "SELECT * FROM users WHERE email = '{$email}'";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    alert('danger', 'User with same email already exists');
    header("Location: login.php");
    exit;
}

$created = time();
$hashed = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (
    first_name, last_name, phone_number, password, email, user_type, created
) VALUES (
    '{$first_name}', '{$last_name}', '{$phone_number}', '{$hashed}',
    '{$email}', 'customer', '{$created}'
)";

if ($conn->query($sql)) {
    login_user($email, $password);
    alert('success', 'Account created successfully');
    header("Location: account-order.php");
} else {
    alert('danger', 'Failed to create account');
    header("Location: login.php");
}
exit;
