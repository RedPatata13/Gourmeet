<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function updatePersonalInfo(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
        ]);

        return back()->with('message', 'Personal info updated!');
    }

    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->update(['email' => $request->email]);

        return back()->with('message', 'Email updated!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:6|same:confirmPassword',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->currentPassword, $user->password)) {
            return back()->with('message', 'Current password is incorrect.');
        }

        $user->update(['password' => Hash::make($request->newPassword)]);

        return back()->with('message', 'Password updated!');
    }

   public function updateProfilePicture(Request $request)
    {
        $request->validate([
            'newProfilePicture' => 'required|image|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('newProfilePicture')) {
            if ($user->profile_picture && Storage::disk('public')->exists($user->profile_picture)) {
                Storage::disk('public')->delete($user->profile_picture);
            }

            $path = $request->file('newProfilePicture')->store('profile-pictures', 'public');
            $user->profile_picture = $path;
            $user->save();
        }

        return redirect()->back()->with('message', 'Profile picture updated successfully.');
    }
 }
