<?php
require_once '../init.php';

if (is_post()) {
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
    $retypePassword = sanitize($_POST['retype-password']);

    $user = getUserBy(get_login_email());

    if ($name) {
        $user['name'] = $name;
    }
    if ($email) {
        $user['email'] = $email;
    }
    if ($password && $password === $retypePassword) {
        $user['password'] = md5($password);
    }

    updateUser(get_login_email(), $user);

    $_SESSION['message'] = 'Profile updated successfully!';
}

redirect('profile.php');
