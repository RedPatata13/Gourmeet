<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Login
     * @param \Illuminate\Http\Request $request
     * @return JsonResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email'=>['required','string','email'],
            'password'=>['required','string'],

        ]);

        if(! Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);

        }

        $request->session()->regenerate();

        // return response()->json([
        //     'message' => 'Login successful',
        //     'user' => [
        //         'id' => Auth::id(),
        //         'name' => Auth::user()->name,
        //         'username' => Auth::user()->username,
        //         'email' => Auth::user()->email,
        //     ]
        // ]);

        return redirect()->intended(route('feed'));
    }
    /**
     * Logs out current user
     * @param \Illuminate\Http\Request $request
     * @return JsonResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // return response()->json([
        //     'message' => 'Logout succesful'
        // ]);

        return redirect('/');
    }
}
