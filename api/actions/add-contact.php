<?php
require_once '../init.php';

// dd($_REQUEST, $_FILES);

if (is_post()) {
    $contactArr = generateContact(
        name: sanitize($_POST['name'] ?? ''),
        email: sanitize($_POST['email'] ?? ''),
        number: sanitize($_POST['phone-number'] ?? ''),
        group: sanitize($_POST['group'] ?? ''),
        address: sanitize($_POST['address'] ?? ''),
        profilePicture: uploadFile($_FILES['profile-picture'] ?? null)
    );

    if ($contactArr) {
        addContact($contactArr);
        $_SESSION['success'] = 'Contact added successfully';
        redirect('list-contact.php');
    } else {
        $_SESSION['error'] = 'Something went wrong';
    }
}

redirect('create-contact.php');
