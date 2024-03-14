<?php

if (!function_exists('generateContact')) {
    /**
     * Generate the contact information
     * 
     * @param string $name
     * @param string $email
     * @param string $number
     * @param string $address
     * @param string $group
     * @param string $profilePicture 
     */
    function generateContact(
        string $name,
        string $email,
        string $number,
        string $address = "",
        string $group = "",
        string $profilePicture = ""
    ) {
        return [
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'address' => $address,
            'group' => $group,
            'profilePicture' => $profilePicture
        ];
    }
}
