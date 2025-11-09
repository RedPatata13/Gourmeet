<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilePage extends Component
{
    use WithFileUploads;

    // Bound properties
    public $name;
    public $username;
    public $email;
    public $currentPassword;
    public $newPassword;
    public $confirmPassword;
    public $profilePicture;
    public $newProfilePicture;

    // Load user data when component mounts
    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->profilePicture = $user->profile_picture ?? null;
    }

    // Update personal info (name & username)
    public function updatePersonalInfo()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->name = $this->name;
        $user->username = $this->username;
        $user->save();

        session()->flash('message', 'Personal info updated!');
    }

    // Update email
    public function updateEmail()
    {
        $this->validate([
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->email = $this->email;
        $user->save();

        session()->flash('message', 'Email updated!');
    }

    // Update password
    public function updatePassword()
    {
        $this->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:6|same:confirmPassword',
        ]);

        $user = Auth::user();

        if (!Hash::check($this->currentPassword, $user->password)) {
            session()->flash('message', 'Current password is incorrect.');
            return;
        }

        $user->password = Hash::make($this->newPassword);
        $user->save();

        $this->reset(['currentPassword', 'newPassword', 'confirmPassword']);
        session()->flash('message', 'Password updated!');
    }

    // Update profile picture
    public function updateProfilePicture()
    {
        $this->validate([
            'newProfilePicture' => 'required|image|max:1024', // max 1MB
        ]);

        $user = Auth::user();
        $path = $this->newProfilePicture->store('profile-pictures', 'public');
        $user->profile_picture = $path;
        $user->save();

        $this->profilePicture = $path;
        $this->newProfilePicture = null;
        session()->flash('message', 'Profile picture updated!');
    }

    // Render Livewire view
    public function render()
    {
        return view('livewire.profile-page');
    }
}
