<?php
session_start();
require_once('file/functions.php');

$email = trim($_POST['email']);
$password = trim($_POST['password']);

if (login_user($email, $password)) {
    alert('success', 'Account logged in successfully');
    header("Location: account-order.php");
    exit;
} else {
    alert('danger', 'You entered wrong username or password.');
    header("Location: login.php");
    exit;
}
