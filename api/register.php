<?php
require_once 'init.php';

$loginHeader = true;
if (is_loggedin()) {
    redirect(''); // redirect to dashboard /index.php
}

require_once 'inc/header.php';
?>
<div class="flex justify-center items-center bg-gray-200 py-10 px-6">
    <div class="p-5 max-w-sm w-full bg-white shadow-md rounded-md">
        <h1 class="text-2xl text-center font-bold">Register here</h1>
        <form class="max-w-sm mx-auto mt-6" action="actions/register-submit.php" method="post">
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="border-l border-l-4 my-2 border-red-500 py-4 px-2 bg-gray-200">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif; ?>

            <label class="block">
                <span class="text-gray-700 text-sm">Email:</span>
                <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="email" placeholder="example@email.com" required>
            </label>

            <label class="block mt-3">
                <span class="text-gray-700 text-sm">Password:</span>
                <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter Password" name="password" required>
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 text-sm">Retype Password:</span>
                <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Retype Your Password" name="retype-password" required>
            </label>

            <div class="flex mt-3 justify-between">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
                <a href="login.php">Back to Login</a>
            </div>
        </form>
    </div>
</div>
<?php

require_once 'inc/footer.php';
