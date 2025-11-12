<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password - Gourmeet</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center p-4">
    <div class="w-full max-w-md">

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

            <div class="bg-gray-900 px-6 py-8 text-center">
                <div class="flex justify-center">
                    <div class="h-12 w-12 bg-white rounded-full shadow-lg flex items-center justify-center">
                        <svg class="h-6 w-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"/>
                            <line x1="96" y1="160" x2="88" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <line x1="160" y1="160" x2="168" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <line x1="128" y1="160" x2="128" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M173.65,65.12A48,48,0,1,1,184,160H72A48,48,0,1,1,82.35,65.12" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M80,80a48,48,0,0,1,96,0" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M200,157.27V208a8,8,0,0,1-8,8H64a8,8,0,0,1-8-8V157.27" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
                <h1 class="mt-4 text-2xl font-bold text-white">Gourmeet</h1>
                <p class="text-gray-300 mt-2">Reset your password</p>
            </div>


            <div class="px-6 py-8">
                <h2 class="text-xl font-semibold text-gray-900 text-center mb-2">Forgot Password?</h2>
                <p class="text-gray-600 text-center text-sm mb-8">Enter your email and we'll send you a reset link</p>


                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-green-600 text-center">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    

                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address
                        </label>
                        <div class="relative">
                            <input 
                                type="email" 
                                name="email" 
                                id="email"
                                placeholder="Enter your email" 
                                required
                                autofocus
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition-all duration-200"
                                value="{{ old('email') }}"
                            >
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                </svg>
                            </div>
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <button 
                        type="submit" 
                        class="w-full bg-gray-900 text-white py-3 px-4 rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-all duration-200 font-medium"
                    >
                        Send Reset Link
                    </button>
                </form>


                <div class="mt-6 text-center">
                    <a 
                        href="{{ route('login') }}" 
                        class="inline-block text-gray-600 hover:text-gray-900 transition-colors font-medium"
                    >
                        ← Back to Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>