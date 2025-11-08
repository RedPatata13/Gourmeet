<x-app-layout> 


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
                    <button type="submit" class="text-white bg-[#111827] hover:bg-[#2d3441] absolute left-154 top-[168.7px] font-medium rounded-lg text-sm px-4 py-[5px]">Search</button>
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
            <div class="flex flex-row flex-wrap gap-15 justify-center items-center mt-10 m-15">
                
                <!-- food card -->
                <x-food-card>
                </x-food-card>

                <!-- food card -->
                <x-food-card>
                </x-food-card>

                <!-- food card -->
                <x-food-card>
                </x-food-card>

                <!-- food card -->
                <x-food-card>
                </x-food-card>

            </div>

        </div>

</x-app-layout> 