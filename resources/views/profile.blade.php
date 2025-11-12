@extends('layouts.AppLayout')

@section('content')
<div class="w-200 flex flex-col">
    <div class="p-6 border-b border-gray-200">
        <h3 class="text-2xl font-bold text-gray-900">User Profile</h3>
        <p class="text-gray-600 text-sm mt-1">Manage your profile information, username, email, and password.</p>
    </div>

    <div class="p-6 overflow-y-auto grow">

        @if (session('message'))
            <div class="mb-4 p-2 bg-green-100 text-green-800 rounded">
                {{ session('message') }}
            </div>
        @endif

        <div class="flex justify-start items-center space-x-4 mb-8">
            <img class="w-24 h-24 rounded-full object-cover border-2 border-gray-300" src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('user-light.png') }}" alt="Profile image">
            <div>
                <h4 class="text-lg font-semibold text-gray-900">Profile Picture</h4>
                <p class="text-sm text-gray-600 mb-2">Update your profile image.</p>
                <form method="POST" action="{{ route('profile.updatePicture') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="newProfilePicture" class="block w-full text-sm text-gray-700">
                    @error('newProfilePicture') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    <button type="submit"
                            class="mt-2 px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-md hover:bg-gray-800 transition duration-150">
                        Change Image
                    </button>
                </form>
            </div>
        </div>

        <div class="mb-8 w-full">
            <h4 class="text-lg font-semibold text-gray-900 border-b pb-2 mb-4">Personal Information</h4>
            <form method="POST" action="{{ route('profile.updateInfo') }}">
                @csrf
                <div class="flex justify-center items-center flex-col gap-4">
                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" name="username" value="{{ old('username', $user->username) }}"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        @error('username') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <button type="submit"
                        class="mt-6 px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-md hover:bg-gray-800 transition duration-150">
                    Save Personal Info
                </button>
            </form>
        </div>

        <div class="mb-8">
            <h4 class="text-lg font-semibold text-gray-900 border-b pb-2 mb-4">Change Email</h4>
            <form method="POST" action="{{ route('profile.updateEmail') }}">
                @csrf
                <input type="email" name="email" value="{{ old('email', $user->email) }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Enter your email">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                <button type="submit"
                        class="mt-4 px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-md hover:bg-gray-800 transition duration-150">
                    Update Email
                </button>
            </form>
        </div>

        <div class="mb-4">
            <h4 class="text-lg font-semibold text-gray-900 border-b pb-2 mb-4">Change Password</h4>
            <form method="POST" action="{{ route('profile.updatePassword') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Current Password</label>
                        <input type="password" name="currentPassword" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        @error('currentPassword') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">New Password</label>
                        <input type="password" name="newPassword" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        @error('newPassword') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                        <input type="password" name="newPassword_confirmation" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                    </div>
                </div>
                <button type="submit"
                        class="mt-6 px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-md hover:bg-gray-800 transition duration-150">
                    Update Password
                </button>
            </form>
        </div>

        <form class="border-t pt-5 mt-5" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                    class="text-gray-900 border border-gray-900 bg-white px-4 py-2 rounded-lg hover:bg-gray-800 hover:text-white transition-colors duration-200 text-sm font-medium">
                Logout
            </button>
        </form>

    </div>
</div>
@endsection
