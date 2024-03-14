<?php

if (!function_exists('showAlert')) {
    function showAlert($sessionName, $color = 'blue')
    {
        if (isset($_SESSION[$sessionName])) {
            $message = $_SESSION[$sessionName];
            unset($_SESSION[$sessionName]);
            return <<<HTML
            <div class="border-l border-l-4 my-2 border-$color-500 bg-white py-4 px-2 bg-gray-200">$message</div>
            HTML;
        }
    }
}
