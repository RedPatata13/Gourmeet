<div 
    id="createRecipe" 
    class="fixed inset-0 overflow-y-auto hidden" 
    aria-labelledby="modal-title-createRecipe" 
    role="dialog" 
    aria-modal="true"
>
    <!-- Background Overlay -->
    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity"></div>

    <!-- Modal Container -->
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:p-0 z-[99]">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl overflow-y-auto text-left max-h-[95vh] flex flex-col">

            <!-- Header -->
            <div class="px-6 pt-6 pb-4 flex justify-between items-center border-b border-gray-100">
                <h3 class="text-xl font-semibold text-gray-900">Create New Recipe</h3>
                <button 
                    id="close-recipe-modal-x" 
                    class="text-gray-400 hover:text-gray-700 transition"
                    onclick="document.getElementById('createRecipe').classList.add('hidden')"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Modal Content -->
            <div data-modal-content class="p-6 space-y-6 overflow-y-auto flex-grow">
                <form id="recipeForm" class="space-y-6">

                    <!-- Title -->
                    <div>
                        <label for="recipe-title" class="block text-sm font-medium text-gray-700">Recipe Title</label>
                        <input type="text" id="recipe-title" name="title" placeholder="e.g., Chocolate Chip Cookies"
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="recipe-description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="recipe-description" name="description" rows="3" placeholder="Brief description of your recipe"
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827] resize-none"></textarea>
                    </div>

                    <!-- Category & Servings -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="recipe-category" class="block text-sm font-medium text-gray-700">Category</label>
                            <input type="text" id="recipe-category" name="category" placeholder="Breakfast"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                        </div>
                        <div>
                            <label for="recipe-servings" class="block text-sm font-medium text-gray-700">Servings</label>
                            <input type="number" id="recipe-servings" name="servings" placeholder="4"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                        </div>
                    </div>

                    <!-- Prep Time & Cook Time -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="recipe-prep-time" class="block text-sm font-medium text-gray-700">Prep Time</label>
                            <input type="text" id="recipe-prep-time" name="prep_time" placeholder="e.g., 15 mins"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                        </div>
                        <div>
                            <label for="recipe-cook-time" class="block text-sm font-medium text-gray-700">Cook Time</label>
                            <input type="text" id="recipe-cook-time" name="cook_time" placeholder="e.g., 30 mins"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                        </div>
                    </div>

                    <!-- Image URL -->
                    <div>
                        <label for="recipe-image-url" class="block text-sm font-medium text-gray-700">Image URL</label>
                        <input type="url" id="recipe-image-url" name="image_url" placeholder="https://example.com/image.jpg"
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                    </div>

                    <!-- Ingredients -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 flex justify-between items-center">
                            Ingredients
                            <button type="button" id="add-ingredient" class="flex items-center text-[#111827] hover:text-[#29354d] transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Add
                            </button>
                        </label>
                        <div id="ingredients-list">
                            <input type="text" name="ingredients[]" placeholder="Ingredient 1"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                        </div>
                    </div>

                    <!-- Instructions -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 flex justify-between items-center">
                            Instructions
                            <button type="button" id="add-instruction" class="flex items-center text-[#111827] hover:text-[#29354d] transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Add
                            </button>
                        </label>
                        <div id="instructions-list">
                            <textarea name="instructions[]" rows="3" placeholder="Step 1"
                                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827] resize-none"></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Footer -->
            <div class="flex justify-end px-6 py-4 border-t bg-gray-50">
                <button 
                    type="button" 
                    onclick="document.getElementById('createRecipe').classList.add('hidden')" 
                    class="px-4 py-2 mr-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-150"
                >
                    Close
                </button>

                <button 
                    id="submit-recipe"
                    class="px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-lg hover:bg-[#29354d] transition duration-150"
                >
                    Create Recipe
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.getElementById('add-ingredient').addEventListener('click', () => {
    const container = document.getElementById('ingredients-list');
    const input = document.createElement('input');
    input.type = 'text';
    input.name = 'ingredients[]';
    input.placeholder = `Ingredient ${container.children.length + 1}`;
    input.className = 'mt-2 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]';
    container.appendChild(input);
});

document.getElementById('add-instruction').addEventListener('click', () => {
    const container = document.getElementById('instructions-list');
    const textarea = document.createElement('textarea');
    textarea.name = 'instructions[]';
    textarea.rows = 3;
    textarea.placeholder = `Step ${container.children.length + 1}`;
    textarea.className = 'mt-2 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827] resize-none';
    container.appendChild(textarea);
});

document.getElementById('submit-recipe').addEventListener('click', async () => {
    const form = document.getElementById('recipeForm');
    const formData = Object.fromEntries(new FormData(form));

    // Convert multiple fields properly (ingredients/instructions)
    formData.ingredients = Array.from(form.querySelectorAll('input[name="ingredients[]"]')).map(i => i.value);
    formData.instructions = Array.from(form.querySelectorAll('textarea[name="instructions[]"]')).map(t => t.value);

    const response = await fetch('/recipes', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN' : '{{ csrf_token() }}'
        },
        body: JSON.stringify(formData)
    });

    const result = await response.json();

    if (response.ok) {
        alert('Recipe created successfully!');
        document.getElementById('createRecipe').classList.add('hidden');
        form.reset();
    } else {
        alert(result.message || 'Failed to create recipe.');
    }
});
</script>
@endpush
