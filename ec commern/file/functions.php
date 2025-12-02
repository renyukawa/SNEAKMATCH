<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conn = new mysqli('192.168.25.125', 'nishida', 'security', 'kutu');

function alert($type, $message){
    $_SESSION['alert']['type'] = $type;
    $_SESSION['alert']['message'] = $message; // 修正
}



function protected_area()
{
    if (!isset($_SESSION['user'])) {
        alert('warning', 'Unauthorized access, Login before you proceed'); 
        header('Location: login.php');
        die();
    }
}


function logout()
{
    if (isset($_SESSION['user'])) {
        unset ($_SESSION['user']);
    } 
    alert('success','logged out successfully.');
    header('Location:login.php');
        die();
    }

function is_logged_in()
{
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}
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

    // ログイン成功 → セッションに保存
    $_SESSION['user'] = $row;

    return true;
}
function text_input($data)
{
    $name = (isset($data['name'])) ? $data['name'] : "";
    $label = (isset($data['labek'])) ? $data['label'] : $name;
    return
     '<label class="form-label text-capitalize" for="' . $name . '">' .$label. '</label>
     <input name="'.$name.'"class="form-control" type="text" id="' . $name . '" placeholder="' . $name . '">';
}

// Multi-language support function
// Returns translated string based on current site language
function t($key, $default = '') {
    global $__lang_strings;
    
    // Check if language strings are loaded
    if (!isset($__lang_strings) || !is_array($__lang_strings)) {
        return $default ?: $key;
    }
    
    // Return translated string or default
    return isset($__lang_strings[$key]) ? $__lang_strings[$key] : ($default ?: $key);
}