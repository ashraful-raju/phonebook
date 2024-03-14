<?php
require_once 'init.php';

if (!is_loggedin()) {
    redirect('login.php');
}

require_once 'inc/header.php'
?>

<!-- Main Content Start -->
<div class="flex flex-col mt-8">
    <div class="bg-gray-50 border border-gray-200 rounded-lg p-8 md:p-12 mb-8">
        <h1 class="text-gray-900 text-3xl md:text-5xl font-extrabold mb-2">Welcome back to your phonebook!</h1>
        <p class="text-lg font-normal text-gray-500 mb-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos qui incidunt totam maiores nulla nesciunt, consectetur ipsum quod! Qui quas vel nobis nostrum, explicabo beatae distinctio ut hic tempora quibusdam!
        </p>
        <a href="list-contact.php" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
            View Contacts
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
</div>
<!-- Main Content End -->

<?php require_once 'inc/footer.php'; ?>