<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Gourmeet</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gray-50">
    <nav class="shadow-sm border-b">
        <div class="px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <svg class="h-8 w-8 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"/>
                            <line x1="96" y1="160" x2="88" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <line x1="160" y1="160" x2="168" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <line x1="128" y1="160" x2="128" y2="128" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M173.65,65.12A48,48,0,1,1,184,160H72A48,48,0,1,1,82.35,65.12" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M80,80a48,48,0,0,1,96,0" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                            <path d="M200,157.27V208a8,8,0,0,1-8,8H64a8,8,0,0,1-8-8V157.27" fill="none" stroke="currentColor" stroke-width="16" stroke-linecap="round"/>
                        </svg>
                        <span class="ml-2 text-xl font-bold text-gray-900">Gourmeet</span>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="#" class="border-gray-900 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Dashboard
                        </a>
                        <a href={{ route('recipes') }} class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Recipes
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Profile
                        </a>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <span class="text-gray-700 mr-4">Welcome, {{ Auth::user()->name }}!</span>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors duration-200 text-sm font-medium">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    
    <main class="p-8">
        gg wp
    </main>
</body>
</html>