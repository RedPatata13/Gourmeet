<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Gourmeet</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-white">
    <div class="min-h-screen flex flex-col lg:flex-row">
        <div class="flex-1 flex flex-col justify-center px-6 py-12 sm:px-12 lg:px-20">
            <div class="w-full max-w-md mx-auto">
                <div class="flex flex-col items-center text-center mb-10">
                    <div class="h-14 w-14 rounded-full bg-gray-900 text-white flex items-center justify-center shadow-lg">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                            <path d="M221.9,155.1a12,12,0,0,0-17-1.9C186.1,168.6,157.8,180,128,180s-58.1-11.4-76.9-26.8a12,12,0,1,0-15.1,18.7C58.6,190,91.6,204,128,204s69.4-14,92-32.1A12,12,0,0,0,221.9,155.1Z"/>
                            <path d="M70.1,128.3A12,12,0,0,0,84,139.7c14.8-9.7,29.5-14.5,44-14.7v24a12,12,0,0,0,24,0v-24c14.5.2,29.2,5,44,14.7a12,12,0,1,0,13.9-11.4C189.8,117.7,161.6,108,128,108S66.2,117.7,70.1,128.3Z"/>
                            <path d="M76,88A52,52,0,0,1,128,36h0a52,52,0,0,1,52,52c0,2.5-.2,5-.5,7.4a12,12,0,0,0,23.7,3.2A76,76,0,1,0,52.8,95c.3-2.4.5-4.9.5-7.4Z"/>
                        </svg>
                    </div>
                    <h1 class="mt-6 text-3xl font-semibold text-gray-900">Gourmeet</h1>
                    <p class="mt-2 text-base text-gray-600">Log in to your Gourmeet account</p>
                </div>

                @if ($errors->any())
                    <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        <ul class="space-y-1 text-left">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status'))
                    <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900 mb-2">Email Address</label>
                        <div class="relative">
                            <input
                                type="email"
                                name="email"
                                id="email"
                                placeholder="you@example.com"
                                required
                                class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 shadow-sm transition focus:border-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-gray-900/20"
                                value="{{ old('email') }}"
                            >
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                </svg>
                            </div>
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                            <a href="{{ route('password.request') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">Forgot password?</a>
                        </div>
                        <div class="relative">
                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Enter your password"
                                required
                                class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-gray-900 shadow-sm transition focus:border-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-gray-900/20"
                            >
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </div>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <label class="inline-flex items-center gap-2 text-gray-700">
                            <input
                                type="checkbox"
                                name="remember"
                                id="remember"
                                class="h-4 w-4 rounded border-gray-300 text-gray-900 focus:ring-gray-900"
                            >
                            Remember me
                        </label>
                        <span class="text-gray-400">Secure login</span>
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-xl bg-gray-900 py-3 text-base font-semibold text-white shadow-lg transition hover:bg-black focus:outline-none focus:ring-2 focus:ring-gray-900/30 focus:ring-offset-2"
                    >
                        Log In
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-gray-600">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-semibold text-gray-900 hover:underline">Sign up</a>
                </p>

                <div class="mt-10 flex items-center gap-3 text-gray-400">
                    <div class="h-px flex-1 bg-gray-200"></div>
                    <span class="text-sm uppercase tracking-[0.18em]"></span>
                    <div class="h-px flex-1 bg-gray-200"></div>
                </div>
                <p class="mt-3 text-center text-sm text-gray-500">Enter any email and password to log in</p>
            </div>
        </div>

        <div class="relative hidden flex-1 lg:block">
            <div
                class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('https://images.unsplash.com/photo-1528712306091-ed0763094c98?auto=format&fit=crop&w=1600&q=80');"
            ></div>
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-10 text-white">
                <h2 class="text-lg font-semibold">Share Your Culinary Creations</h2>
                <p class="mt-2 max-w-md text-sm text-gray-100">Join our community of food lovers and share your favorite recipes with the world.</p>
            </div>
        </div>
    </div>
</body>
</html>