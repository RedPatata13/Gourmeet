<x-app-layout> 
    <!-- main stuff goes here -->
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <!-- Header Section -->
        <div class="mb-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Discover Recipes</h2>
            <p class="text-[#717182] text-sm sm:text-base">Explore delicious recipes shared by our community</p>
        </div>

        <!-- Search Bar -->
        <div class="mb-6">
            <form class="flex flex-col sm:flex-row gap-3 max-w-md">
                <div class="relative flex-1">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input 
                        type="search" 
                        id="default-search" 
                        class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" 
                        placeholder="Search recipes by name..." 
                        required 
                    />
                </div>
                <button 
                    type="submit" 
                    class="text-white bg-[#111827] hover:bg-[#2d3441] font-medium rounded-lg text-sm px-6 py-2.5 whitespace-nowrap transition-colors"
                >
                    Search
                </button>
            </form>
        </div>

        <!-- Category Buttons -->
        <div id="button-group" class="mb-8 flex flex-wrap gap-2 sm:gap-3">
            <button 
                aria-pressed="true" 
                onclick="handleSelection(this)" 
                class="bg-[#111827] text-white ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                All
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Breakfast
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Lunch
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Dinner
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Dessert
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Snack
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Appetizer
            </button>
        </div>

        <!-- Recipe Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 justify-items-center">
            <!-- food card -->
            <x-food-card></x-food-card>

            <!-- food card -->
            <x-food-card></x-food-card>

            <!-- food card -->
            <x-food-card></x-food-card>

            <!-- food card -->
            <x-food-card></x-food-card>
        </div>
    </div>
</x-app-layout> 