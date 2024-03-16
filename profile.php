<?php
require_once 'init.php';

if (!is_loggedin()) {
    redirect('login.php');
}

$user = getUserBy(get_login_email());

require_once 'inc/header.php'
?>

<!-- Main Content Start -->
<div class="flex flex-col mt-8 max-w-md">
    <h1 class="text-2xl font-bold">Profile</h1>
    <form class="mt-6" action="actions/update-user.php" method="post" enctype="multipart/form-data">
        <?php if (isset($_SESSION['message'])) : ?>
            <div class="border-l border-l-4 my-2 border-blue-500 bg-white py-4 px-2 bg-gray-200">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif; ?>

        <label class="block">
            <span class="text-gray-700 text-sm">Name:</span>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name" placeholder="Full Name" value="<?= $user['name'] ?? '' ?>" required>
        </label>

        <label class="block mt-3">
            <span class="text-gray-700 text-sm">Email:</span>
            <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="email" placeholder="example@email.com" value="<?= $user['email'] ?? '' ?>" required>
        </label>

        <label class="block mt-3">
            <span class="text-gray-700 text-sm">Password:</span>
            <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter Password" name="password">
        </label>
        <label class="block mt-3">
            <span class="text-gray-700 text-sm">Retype Password:</span>
            <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Retype Your Password" name="retype-password">
        </label>
        <label class="block mt-3">
            <span class="text-gray-700 text-sm">Profile Image:</span>
            <input type="file" class="border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" accept="image/*" name="profile-image">
        </label>

        <div class="flex mt-3 justify-between">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>

        </div>
    </form>
</div>
<!-- Main Content End -->

<?php require_once 'inc/footer.php'; ?>