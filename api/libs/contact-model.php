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
        if ($name == "" || $email == "" || $number == "") {
            return false;
        }

        return [
            'user_id' => get_login_email(),
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'address' => $address,
            'group' => $group,
            'profilePicture' => $profilePicture,
        ];
    }
}

// function get or read user data
if (!function_exists('getContacts')) {
    function getContacts()
    {
        $data = file_get_contents(BASE_DIR . DS . 'data/contacts.json');

        return array_filter(
            json_decode($data, true) ?? [],
            fn ($item) => $item['user_id'] === get_login_email()
        );
    }
}

// function for add contacts add put them to user data
if (!function_exists('addContact')) {
    function addContact($data = [])
    {
        $items = getContacts();
        $items[] = $data;

        file_put_contents(
            BASE_DIR . DS . 'data/contacts.json',
            json_encode($items)
        );
    }
}


// function for searching user in data file 
if (!function_exists('getContactBy')) {
    function getContactBy($key, $value)
    {
        $data = getContacts();
        foreach ($data as $item) {
            if ($item[$key] === $value) {
                return $item;
            }
        }
        return null;
    }
}

// function for searching user in data file 
if (!function_exists('deleteUser')) {
    function deleteUser($number)
    {
        $contacts = array_filter(
            getContacts(),
            fn ($item) => $item['number'] !== $number
        );

        file_put_contents(
            BASE_DIR . DS . 'data/contacts.json',
            json_encode($contacts)
        );
    }
}

// function for add contacts add put them to user data
if (!function_exists('updateContact')) {
    function updateContact($number, $contact = [])
    {
        $contacts = array_map(function ($item) use ($number, $contact) {
            if ($item['number'] == $number) {
                return array_merge($item, $contact);
            }

            return $item;
        }, getContacts());

        file_put_contents(
            BASE_DIR . DS . 'data/contacts.json',
            json_encode($contacts)
        );
    }
}
