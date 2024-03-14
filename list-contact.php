<?php
require_once 'init.php';

if (!is_loggedin()) {
    redirect('login.php');
}

$contacts = getContacts();

require_once 'inc/header.php'
?>

<!-- Main Content Start -->
<h3 class="text-gray-700 text-3xl mt-4 font-medium">Contact List</h3>
<?= showAlert('message') ?>
<div class="flex flex-col mt-8">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Phone Number</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Address</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Group</th>

                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    <?php
                    foreach ($contacts as $contact) :
                    ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="<?= getProfilePictureUrl($contact['profilePicture'], $contact['name']) ?>" alt="" />
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900"><?= $contact['name'] ?></div>
                                        <div class="text-sm leading-5 text-gray-500"><?= $contact['email'] ?></div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900"><?= $contact['number'] ?></div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900"><?= $contact['address'] ?></div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"><?= $contact['group'] ?></span>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium" x-data="{ modal_<?= $contact['number'] ?>: false }">
                                <button @click="modal_<?= $contact['number'] ?> = !modal_<?= $contact['number'] ?>" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                <span class="mx-1">|</span>
                                <a href="/actions/delete-contact.php?number=<?= $contact['number'] ?>" onclick="return confirm('Are you sure?')" class="text-rose-600 hover:text-rose-900">Delete</a>
                                <?php require_once 'inc/edit-modal.php' ?>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Main Content End -->

<?php require_once 'inc/footer.php'; ?>