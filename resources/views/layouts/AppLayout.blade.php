<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Optional: Add CSS here -->
    {{-- <link rel="stylesheet" href="{{ asset('') }}"> --}}
    @vite('resources/css/app.css')
</head>
<body>
 {{-- @yield('header')
  --}}
    <header class="bg-white shadow-sm border-b">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-4">
                    <a href="{{ route('feed') }}" class="flex items-center gap-2">
                        {{-- logo --}}
                        <svg class="h-8 w-8 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" role="img" aria-label="Gourmeet logo">
                            <rect width="256" height="256" fill="none"/>
                            <line x1="96" y1="160" x2="88" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <line x1="160" y1="160" x2="168" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <line x1="128" y1="160" x2="128" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M173.65,65.12A48,48,0,1,1,184,160H72A48,48,0,1,1,82.35,65.12" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M80,80a48,48,0,0,1,96,0" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M200,157.27V208a8,8,0,0,1-8,8H64a8,8,0,0,1-8-8V157.27" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                        </svg>
                        <span class="text-xl font-bold text-gray-900">Gourmeet</span>
                    </a>

                    {{-- desktop nav --}}
                    <nav class="hidden md:flex md:ml-6 md:space-x-6" aria-label="Primary">
                        <a href="{{ route('feed') }}" class="text-gray-600 hover:text-gray-900 text-sm font-medium">Recipes</a>
                        <a href="{{ route('profile') }}" class="text-gray-600 hover:text-gray-900 text-sm font-medium">Profile</a>
                    </nav>
                </div>

                {{-- right side --}}
                <div class="flex items-center gap-4">
                    @auth
                        <p class="text-gray-700 hidden sm:inline">Welcome, {{ Auth::user()->name }}!</p>
                        <button
                            type="button"
                            onclick="openCreateRecipe()"
                            class="bg-gray-900 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors duration-200 text-sm font-medium"
                        >
                            + Create Recipe
                        </button>
                    @else
                        <div class="flex gap-2">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:underline">Log in</a>
                            <a href="{{ route('register') }}" class="text-sm text-gray-900 font-medium">Sign up</a>
                        </div>
                    @endauth

                    {{-- mobile hamburger --}}
                    <button id="navToggle" aria-expanded="false" aria-controls="mobileNav" class="md:hidden p-2 rounded-md hover:bg-gray-100">
                        <span class="sr-only">Open menu</span>
                        <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- mobile nav --}}
        <nav id="mobileNav" class="md:hidden hidden border-t" aria-label="Mobile">
            <div class="px-4 py-3 space-y-1">
                <a href="{{ route('feed') }}" class="block text-gray-700 py-2">Recipes</a>
                <a href="{{ route('profile') }}" class="block text-gray-700 py-2">Profile</a>
            </div>
        </nav>
    </header>
    <!-- Main Content -->
    <main style="padding: 20px;" class="">
        @yield('content')
    </main>

    <footer style="padding: 20px; background: #f0f0f0; text-align: center; position: fixed; bottom: 0; width: 100%;">
        &copy; {{ date('Y') }} My Laravel App. All rights reserved.
    </footer>
</body>
</html>
