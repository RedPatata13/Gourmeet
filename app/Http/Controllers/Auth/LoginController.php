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
        ]); //this one I have an idea that it's jus setting the rules for valid formatting: [required: cant be empty, string: type, email: format]

        if(! Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);

        } // only part that I get is that it throws the exception

        $request->session()->regenerate(); // absolutely no clue what this does

        // return response()->json([
        //     'message' => 'Login successful',
        //     'user' => [
        //         'id' => Auth::id(),
        //         'name' => Auth::user()->name,
        //         'username' => Auth::user()->username,
        //         'email' => Auth::user()->email,
        //     ]
        // ]);

// <<<<<<< HEAD
//         return redirect()->intended(route('dashboard')); // I get this part
// =======
        return redirect()->intended(route('feed'));
// >>>>>>> yoeBranch
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
