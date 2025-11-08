<div id="createRecipe" class="fixed inset-0  overflow-y-auto hidden" aria-labelledby="modal-title-createRecipe" role="dialog" aria-model="true">

    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity" >    

        <!-- modal container -->
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:p-0 z-99">
            <center>
                <!-- panel -->
                <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl overflow-y-auto text-left max-h-[95vh] flex flex-col">
                    <div class="bg-white p-6 sm:p-8">
                           <div class="px-6 pt-6 pb-4 flex justify-between items-center border-b border-gray-100">
                                <h3 class="text-xl font-semibold text-gray-900">Create New Recipe</h3>
                                <button onclick="document.getElementById('createRecipe').classList.add('hidden')" id="close-recipe-modal-x" class="text-gray-400 hover:text-gray-700 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <div data-modal-content class="p-6 space-y-6 overflow-y-auto flex-grow">
                
                <div>
                    <label for="recipe-title" class="block text-sm font-medium text-gray-700">Recipe Title</label>
                    <input type="text" id="recipe-title" placeholder="e.g., Chocolate Chip Cookies" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                </div>
                
                <div>
                    <label for="recipe-description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="recipe-description" rows="3" placeholder="Brief description of your recipe" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827] resize-none"></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="recipe-category" class="block text-sm font-medium text-gray-700">Category</label>
                        <input type="text" id="recipe-category" placeholder="Breakfast" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                    </div>
                    <div>
                        <label for="recipe-servings" class="block text-sm font-medium text-gray-700">Servings</label>
                        <div class="relative mt-1">
                            <input type="number" id="recipe-servings" placeholder="4" class="block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 pr-10 focus:border-[#111827]">
                            <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="recipe-prep-time" class="block text-sm font-medium text-gray-700">Prep Time</label>
                        <input type="text" id="recipe-prep-time" placeholder="e.g., 15 mins" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                    </div>
                    <div>
                        <label for="recipe-cook-time" class="block text-sm font-medium text-gray-700">Cook Time</label>
                        <input type="text" id="recipe-cook-time" placeholder="e.g., 30 mins" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                    </div>
                </div>

                <div>
                    <label for="recipe-image-url" class="block text-sm font-medium text-gray-700">Image URL</label>
                    <input type="url" id="recipe-image-url" placeholder="https://example.com/image.jpg" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 flex justify-between items-center">
                        Ingredients
                        <button class="flex items-center text-[#111827] hover:text-[#29354d] transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Add
                        </button>
                    </label>
                    <input type="text" placeholder="Ingredient 1" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 flex justify-between items-center">
                        Instructions
                        <button class="flex items-center text-[#111827] hover:text-[#29354d] transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Add
                        </button>
                    </label>
                    <textarea rows="3" placeholder="Step 1" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827] resize-none"></textarea>
                </div>

            </div>  
                    </div>

                    <div class="flex justify-end items-end px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-150">
                        <button 
                            onclick="document.getElementById('createRecipe').classList.add('hidden')"
                            type="button" 
                            class="px-4 py-2 mr-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-150">
                            Close
                        </button>                
                        <button class="px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-lg hover:bg-[#29354d] transition duration-150">
                            Create Recipe
                        </button>    
                    </div>

                </div>
            </center>
        </div>
    </div>
</div>