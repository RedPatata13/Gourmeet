<div class="w-full max-w-7xl mx-auto py-6">
    <div class="mb-6">
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Discover Recipes</h2>
        <p class="text-[#717182] text-sm sm:text-base">Explore delicious recipes shared by our community</p>
    </div>

    <div class="mb-6">
        <form @submit.prevent class="flex flex-col sm:flex-row gap-3 max-w-md">
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input 
                    type="search" 
                    wire:model.live.debounce.300ms="searchQuery" {{-- Bind to Livewire state, debounce for performance --}}
                    class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" 
                    placeholder="Search recipes by name..."
                />
            </div>
            {{-- Search button removed, as wire:model.live handles reactivity --}}
        </form>
    </div>

    <div id="button-group" class="mb-8 flex flex-wrap gap-2 sm:gap-3">
        @foreach (['All', 'Breakfast', 'Lunch', 'Dinner', 'Dessert', 'Snack', 'Appetizer'] as $category)
            <button
                wire:click="selectCategory('{{ $category }}')" {{-- Call the Livewire method defined in the PHP class --}}
                :aria-pressed="$selectedCategory === '{{ $category }}'"
                class="font-medium rounded-lg text-sm px-4 py-2 transition-colors
                    @if ($selectedCategory === $category)
                        bg-[#111827] text-white ring-1 ring-[#d3d7dd]
                    @else
                        bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700
                    @endif
                "
            >
                {{ $category }}
            </button>
        @endforeach
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 justify-items-center">
        
        {{-- Use the computed property $this->filteredRecipes from the Livewire component --}}
        @forelse ($this->filteredRecipes as $recipe)
            <x-food-card 
                :title="$recipe['title']"
                :description="$recipe['description']"
                :image="$recipe['image']"
                :category="$recipe['category']"
                :prep-time="$recipe['prepTime']"
                :servings="$recipe['servings']"
                :likes="$recipe['likes']"
                :user-name="$recipe['userName']"
            />
        @empty
            <div class="flex flex-col items-center justify-center p-6 bg-gray-50 rounded-lg shadow text-center w-full sm:w-auto col-span-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M9 17v-2a4 4 0 118 0v2m-9 4h10a2 2 0 002-2v-6a8 8 0 10-14 0v6a2 2 0 002 2z" />
                </svg>
                <p class="text-gray-700 font-medium">No recipes match your current search or filter.</p>
            </div>
        @endforelse
    </div>
</div>