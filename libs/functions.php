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

if (!function_exists('set_login')) {
    function set_login($status)
    {
        if ($status == true) {
            $_SESSION['loggedin'] = true;
        } else {
            unset($_SESSION['loggedin']);
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
