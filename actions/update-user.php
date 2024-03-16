<?php
require_once '../init.php';

if (is_post()) {
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
    $retypePassword = sanitize($_POST['retype-password']);
    $profileImage = uploadFile($_FILES['profile-image'] ?? null, md5(get_login_email()));

    $user = getUserBy(get_login_email());

    if ($name) {
        $user['name'] = $name;
    }
    if ($email) {
        $user['email'] = $email;
        set_login(true, $email);
    }
    if ($password && $password === $retypePassword) {
        $user['password'] = md5($password);
    }
    if ($profileImage) {
        $user['profile-image'] = $profileImage;
    }

    updateUser(get_login_email(), $user);

    $_SESSION['message'] = 'Profile updated successfully!';
}

redirect('profile.php');
