<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Gourmeet</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                            Recipes
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Delete this
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


    <main class="p-8 flex-grow mb-20">
        <!-- main stuff goes here -->
        <div class="">
            <!-- above stuffs -->
            <div class="ml-15">
                <h2 class="text-xl  mb-1">Discover Recipes</h2>
                <p class="text-[#717182] text-sm mb-4">Explore delicious recipes shared by our community</p>

                <div class="absolute top-9 left-30 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 absolute top-35 -left-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div >
                <div class="flex-wrap justify-between items-center">
                    <input type="search" id="default-search" class="block w-150 p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search recipes by name..." required />
                    <button type="submit" class="text-white bg-[#111827] hover:bg-[#2d3441] absolute left-150 top-[157.7px] font-medium rounded-lg text-sm px-4 py-[5px]">Search</button>
                </div>
                <!-- cateogry buttons -->
                <div id="button-group" class="mt-5">
                    <button aria-pressed="false" onclick="handleSelection(this)" class=" bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 aria-pressed:text-white aria-pressed:bg-[#111827] aria-pressed:outline-none font-medium rounded-lg text-sm px-4 py-[5px]"
                    >All</button>
                    <button aria-pressed="false" onclick="handleSelection(this)" class=" bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 aria-pressed:text-white aria-pressed:bg-[#111827] aria-pressed:outline-none font-medium rounded-lg text-sm px-4 py-[5px]"
                    >Breakfast</button>
                    <button aria-pressed="false" onclick="handleSelection(this)" class=" bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 aria-pressed:text-white aria-pressed:bg-[#111827] aria-pressed:outline-none font-medium rounded-lg text-sm px-4 py-[5px]"
                    >Lunch</button>
                    <button aria-pressed="false" onclick="handleSelection(this)" class=" bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 aria-pressed:text-white aria-pressed:bg-[#111827] aria-pressed:outline-none font-medium rounded-lg text-sm px-4 py-[5px]"
                    >Dinner</button>
                    <button aria-pressed="false" onclick="handleSelection(this)" class=" bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 aria-pressed:text-white aria-pressed:bg-[#111827] aria-pressed:outline-none font-medium rounded-lg text-sm px-4 py-[5px]"
                    >Dessert</button>
                    <button aria-pressed="false" onclick="handleSelection(this)" class=" bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 aria-pressed:text-white aria-pressed:bg-[#111827] aria-pressed:outline-none font-medium rounded-lg text-sm px-4 py-[5px]"
                    >Snack</button>
                    <button aria-pressed="false" onclick="handleSelection(this)" class=" bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 aria-pressed:text-white aria-pressed:bg-[#111827] aria-pressed:outline-none font-medium rounded-lg text-sm px-4 py-[5px]"
                    >Appetizer</button>
                </div>
            </div>

            <!-- card container -->
            <div class="flex flex-wrap gap-15 justify-start items-center mt-10 m-15">

                <!-- food card -->
                <x-food-card>

                </x-food-card>


            </div>

        </div>
    </main>

    <script>
        // for handling of clicked button group on mainFoodPage
        function handleSelection(clickedButton) {
            const parent = clickedButton.parentElement;

            const buttons = parent.querySelectorAll('button');
            buttons.forEach(button => {
                button.setAttribute('aria-pressed', 'false');
            });

            clickedButton.setAttribute('aria-pressed', 'true');

        }
    </script>
</body>
</html>
