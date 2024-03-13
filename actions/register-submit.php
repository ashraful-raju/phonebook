<?php
require_once '../init.php';

function checkPasswordRetype($password, $retypePassword)
{
    // Check if both passwords are not empty
    if (!empty($password) && !empty($retypePassword)) {
        // Check if passwords match
        if ($password === $retypePassword) {
            return true; // Passwords match
        } else {
            return false; // Passwords do not match
        }
    } else {
        return false; // One or both passwords are empty
    }
}

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
