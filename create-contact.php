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
    <h1 class="text-2xl font-bold">Add Contact</h1>
    <form class="mt-6" action="actions/add-contact.php" method="post" enctype="multipart/form-data">
        <?= showAlert('message') ?>

        <label class="block">
            <span class="text-gray-700 text-sm">Full Name:</span>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name" placeholder="Full Name" required>
        </label>


        <label class="block mt-3">
            <span class="text-gray-700 text-sm">Email:</span>
            <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter email" name="email">
        </label>
        <label class="block mt-3">
            <span class="text-gray-700 text-sm">Phone Number:</span>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter phone number" name="phone-number">
        </label>

        <label class="block mt-3">
            <span class="text-gray-700 text-sm">Address</span>
            <textarea type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="address" placeholder="Enter Full Address"></textarea>
        </label>

        <label class="block mt-3">
            <span class="text-gray-700 text-sm">Group:</span>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter company or group" name="group">
        </label>

        <label class="block mt-3">
            <span class="text-gray-700 text-sm">Profile Picture:</span>
            <input type="file" class="border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" accept="image/*" name="profile-picture">
        </label>

        <div class="flex mt-3 justify-between">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>

        </div>
    </form>
</div>
<!-- Main Content End -->

<?php require_once 'inc/footer.php'; ?>