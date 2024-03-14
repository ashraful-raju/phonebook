<?php
require_once '../init.php';

// add login functionality here

if (is_GET()) {
    $email = sanitize($_GET['email']);
    $password = sanitize($_GET['password']);

    $user = getUserBy($email);

    if ($user && $user['password'] == md5($password)) {
        set_login(true, $user['email']);
        redirect(''); // redirect to dashboard /index.php
    } else {
        $_SESSION['error'] = 'Email or Password did not match';
    }
}

redirect('login.php');
