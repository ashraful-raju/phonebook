<?php

require_once '../init.php';

if (isset($_GET['number'])) {
    $number = sanitize($_GET['number']);

    $item = getContactBy('number', $number);
    deleteUser($number);

    if (file_exists($item['profilePicture'] ?? '')) {
        unlink($item['profilePicture']);
    }
}

redirect('list-contact.php');
