<?php

if (!function_exists('dd')) {
    function dd()
    {
        foreach (func_get_args() as $data) {
            echo '<div style="
            padding: 15px;
            width: 800px;
            overflow: auto;
            background: antiquewhite;
            margin: 20px auto;">';
            highlight_string("<?php\n\n" . var_export($data, true) . "\n\n?>\n");
            echo '</div>';
        }

        die;
    }
}

if (!function_exists('is_GET')) {
    function is_GET()
    {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }
}
if (!function_exists('is_post')) {
    function is_post()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }
}

if (!function_exists('get_login_email')) {
    function get_login_email()
    {
        return $_SESSION['login_email'] ?? '';
    }
}

if (!function_exists('set_login')) {
    function set_login($status, $email = null)
    {
        if ($status == true && $email) {
            $_SESSION['loggedin'] = true;
            $_SESSION['login_email'] = $email;
        } else {
            unset($_SESSION['loggedin']);
            unset($_SESSION['login_email']);
        }
    }
}

if (!function_exists('is_loggedin')) {
    function is_loggedin()
    {
        return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true;
    }
}

if (!function_exists('redirect')) {
    function redirect($path = "")
    {
        header('Location: /' . $path);
        die;
    }
}

if (!function_exists('sanitize')) {
    function sanitize($value)
    {
        return filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}

if (!function_exists('getProfilePictureUrl')) {
    function getProfilePictureUrl($path, $name = "")
    {
        return $path ?? 'https://ui-avatars.com/api/?name=' . $name;
    }
}

if (!function_exists('uploadFile')) {
    function uploadFile($file, $name = null)
    {
        if ($file['tmp_name'] ?? false) {
            $originalName = basename($file['name']);
            $extension = pathinfo($originalName, PATHINFO_EXTENSION);
            $name = $name ? "$name.$extension" : $originalName;
            $imagePath = '/uploads/' . $name;
            move_uploaded_file($file['tmp_name'], BASE_DIR . $imagePath);
            return $imagePath;
        }

        return null;
    }
}
