<?php
require_once '../init.php';

if (is_post()) {
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
    $retypePassword = sanitize($_POST['retype-password']);

    if ($email && $password && $password === $retypePassword && !getUserBy($email)) {
        addUser($email, $password);

        $_SESSION['error'] = "Account created, login to continue!";
        redirect('login.php');
    } else {
        $_SESSION['error'] = "Invalid user data given or already exist!";
    }
}

redirect('register.php');
