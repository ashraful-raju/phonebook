<?php
require_once '../init.php';

if (is_post()) {
    $searchNumber = sanitize($_GET['number'] ?? $_POST['phone-number']);
    $item = getContactBy('number', $searchNumber);

    $contactArr = generateContact(
        name: sanitize($_POST['name'] ?? $item['name']),
        email: sanitize($_POST['email'] ?? $item['email']),
        number: sanitize($_POST['phone-number'] ?? $item['number']),
        group: sanitize($_POST['group'] ?? $item['group']),
        address: sanitize($_POST['address'] ?? $item['address']),
        profilePicture: uploadFile($_FILES['profile-picture'] ?? null) ?? $item['profilePicture'],
    );

    updateContact($searchNumber, $contactArr);

    $_SESSION['message'] = 'Contact updated successfully!';
}

redirect('list-contact.php');
