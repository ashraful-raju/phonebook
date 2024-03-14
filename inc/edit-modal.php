<div x-cloak tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 bg-black bg-opacity-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" :class="modal_<?= $contact['number'] ?> ? 'flex' : 'hidden'">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Edit Contact (<?= $contact['name'] ?>)
                </h3>
                <button @click="modal_<?= $contact['number'] ?> = false" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form action="actions/add-contact.php" method="post" enctype="multipart/form-data">

                    <label class="block">
                        <span class="text-gray-700 text-sm">Full Name:</span>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name" placeholder="Full Name" value="<?= $contact['name'] ?>" required>
                    </label>


                    <label class="block mt-3">
                        <span class="text-gray-700 text-sm">Email:</span>
                        <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter email" value="<?= $contact['email'] ?>" name="email">
                    </label>
                    <label class="block mt-3">
                        <span class="text-gray-700 text-sm">Phone Number:</span>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter phone number" value="<?= $contact['number'] ?>" name="phone-number">
                    </label>

                    <label class="block mt-3">
                        <span class="text-gray-700 text-sm">Address</span>
                        <textarea type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="address" placeholder="Enter Full Address"><?= $contact['address'] ?></textarea>
                    </label>

                    <label class="block mt-3">
                        <span class="text-gray-700 text-sm">Group:</span>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter company or group" value="<?= $contact['group'] ?>" name="group">
                    </label>

                    <label class="block mt-3">
                        <span class="text-gray-700 text-sm">Profile Picture:</span>
                        <div class="flex justify-between items-center">
                            <input type="file" class="border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" accept="image/*" value="<?= $contact['name'] ?>" name="profile-picture">
                            <img src="<?= getProfilePictureUrl($contact['profilePicture'], $contact['name']) ?>" class="min-w-12 min-h-12 w-12 h-12 rounded-full ml-2" alt="" />
                        </div>
                    </label>

                    <div class="flex mt-3 justify-between">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>