<?php
// function get or read user data
if (!function_exists('getUsers')) {
    function getUsers()
    {
        $data = file_get_contents(BASE_DIR . DS . 'data/users.json');

        return json_decode($data, true);
    }
}

// function for add users add put them to user data
if (!function_exists('addUser')) {
    function addUser($email, $password)
    {
        $users = getUsers();
        $password = md5($password);
        $users[] = compact('email', 'password');
        file_put_contents(
            BASE_DIR . DS . 'data/users.json',
            json_encode($users)
        );
    }
}

// function for searching user in data file 
if (!function_exists('getUserBy')) {
    function getUserBy($email)
    {
        $data = getUsers();
        foreach ($data as $user) {
            if ($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }
}
