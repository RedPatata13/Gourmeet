<x-app-layout> 

    <div class="w-200 flex flex-col ">
        <!-- main stuff goes here -->
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-2xl font-bold text-gray-900">User Profile</h3>
                <p class="text-gray-600 text-sm mt-1">Manage your profile information, username, email, and password.</p>
            </div>

            <div  class="p-6 overflow-y-auto flex-grow">
                <div class="flex justify-start items-center space-x-4 mb-8">
                    <img class="w-24 h-24 rounded-full object-cover border-2 border-gray-300 " src="{{ asset('user-light.png') }}"  alt="Profile image">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900">Profile Picture</h4>
                        <p class="text-sm text-gray-600 mb-2">Update your profile image.</p>
                        <button class="px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-md hover:bg-gray-800 transition duration-150">
                            Change Image
                        </button>
                    </div>
                </div>

                <div class="mb-8 w-full">
                    <h4 class="text-lg font-semibold text-gray-900 border-b pb-2 mb-4">Personal Information</h4>
                    <div class="flex justify-center items-center flex-col gap-4">
                        <div class="w-full">
                            <label for="settings-fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input placeholder="Enter your full name" type="text" id="settings-firstname" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                        <div class="w-full">
                            <label for="settings-username" class="block text-sm font-medium text-gray-700">Username</label>
                            <input placeholder="Enter your username" type="text" id="settings-username" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                    </div>
                    <button class="mt-6 px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-md hover:bg-gray-800 transition duration-150">
                        Save Personal Info
                    </button>
                </div>

                <div class="mb-8">
                    <h4 class="text-lg font-semibold text-gray-900 border-b pb-2 mb-4">Change Email</h4>
                    <label for="settings-email" class="block text-sm font-medium text-gray-700">New Email</label>
                    <input placeholder="Enter your email" type="email" id="settings-email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                    <button class="mt-4 px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-md hover:bg-gray-800 transition duration-150">
                        Update Email
                    </button>
                </div>

                <div class="mb-4">
                    <h4 class="text-lg font-semibold text-gray-900 border-b pb-2 mb-4">Change Password</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="settings-current-password" class="block text-sm font-medium text-gray-700">Current Password</label>
                            <input placeholder="Enter your current password" type="password" id="settings-current-password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                        <div>
                            <label for="settings-new-password" class="block text-sm font-medium text-gray-700">New Password</label>
                            <input placeholder="Enter your new password" type="password" id="settings-new-password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                        <div class="md:col-span-2">
                            <label for="settings-confirm-password" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                            <input placeholder="Re-enter your password" type="password" id="settings-confirm-password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                    </div>
                    <button class="mt-6 px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-md hover:bg-gray-800 transition duration-150">
                        Update Password
                    </button>
                </div>
                <form class="border-t pt-5 mt-5" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-900 border-1 border-gray-900 bg-white px-4 py-2 rounded-lg hover:bg-gray-800 hover:text-white transition-colors duration-200 text-sm font-medium">
                        Logout
                    </button>
                </form>
            </div>
    </div>

</x-app-layout> 