<div id="createRecipe" class="fixed inset-0 overflow-y-auto hidden z-50" aria-labelledby="modal-title-createRecipe" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-gray-900/37 transition-opacity"></div>    

    <!-- Modal container -->
    <div class="fixed inset-0 flex items-center justify-center p-4 z-50 pointer-events-none">
        <!-- Modal panel -->
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-5xl overflow-hidden text-left max-h-[95vh] flex flex-col relative z-50 pointer-events-auto">
            
            <!-- Header -->
            <div class="px-6 pt-6 pb-4 flex justify-between items-center border-b border-gray-100">
                <h3 class="text-xl font-semibold text-gray-900">Create New Recipe</h3>
                <button onclick="document.getElementById('createRecipe').classList.add('hidden'); document.body.classList.remove('overflow-hidden');" class="text-gray-400 hover:text-gray-700 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Form -->
            <form id="recipeForm" class="px-6 py-6 space-y-5 overflow-y-auto flex-grow" style="max-height: calc(95vh - 160px);">
                <!-- Recipe Title -->
                <div>
                    <label for="recipe-title" class="block text-sm font-medium text-gray-700 mb-1">Recipe Title</label>
                    <input type="text" id="recipe-title" name="title" placeholder="e.g., Chocolate Chip Cookies" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827]" required>
                </div>

                <!-- Description -->
                <div>
                    <label for="recipe-description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="recipe-description" name="description" rows="2" placeholder="Brief description of your recipe" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827] resize-none" required></textarea>
                </div>

                <!-- Category -->
                <div>
                    <label for="recipe-category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <div class="relative mt-1">
                        <select id="recipe-category" name="category" class="hidden" required>
                            <option value="">Select a category</option>
                            <option value="Breakfast" selected>Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                            <option value="Dessert">Dessert</option>
                            <option value="Snack">Snack</option>
                            <option value="Appetizer">Appetizer</option>
                        </select>

                        <div class="relative">
                            <button type="button" id="category-dropdown-button" class="w-full bg-gray-50 border border-gray-300 rounded-lg shadow-sm p-2.5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-[#111827] focus:border-[#111827] transition">
                                <span id="category-selected-text" class="text-gray-700">Breakfast</span>
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            
                            <div id="category-dropdown-menu" class="hidden absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-lg">
                                <div class="py-1">
                                    <button type="button" class="category-option w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-value="Breakfast">Breakfast</button>
                                    <button type="button" class="category-option w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-value="Lunch">Lunch</button>
                                    <button type="button" class="category-option w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-value="Dinner">Dinner</button>
                                    <button type="button" class="category-option w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-value="Dessert">Dessert</button>
                                    <button type="button" class="category-option w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-value="Snack">Snack</button>
                                    <button type="button" class="category-option w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-value="Appetizer">Appetizer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Servings -->
                <div>
                    <label for="recipe-servings" class="block text-sm font-medium text-gray-700 mb-1">Servings</label>
                    <input type="number" id="recipe-servings" name="servings" placeholder="4" min="1" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 pr-10 focus:border-[#111827]" required>
                </div>

                <!-- Prep & Cook Time -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="recipe-prep-time" class="block text-sm font-medium text-gray-700">Prep Time</label>
                        <input type="text" id="recipe-prep-time" name="prep_time" placeholder="e.g., 15 mins" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                    </div>
                    <div>
                        <label for="recipe-cook-time" class="block text-sm font-medium text-gray-700">Cook Time</label>
                        <input type="text" id="recipe-cook-time" name="cook_time" placeholder="e.g., 30 mins" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-3 placeholder-gray-400 focus:border-[#111827]">
                    </div>
                </div>

                <!-- Image Upload -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Recipe Image</label>
                    <div id="image-upload-container" class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center cursor-pointer hover:border-[#111827] transition-colors">
                        <input type="file" id="recipe-image" name="cover_image" accept="image/*" class="hidden">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="mt-1 text-sm text-gray-600">Click to upload or drag and drop</p>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                    <div id="image-preview" class="mt-2 hidden">
                        <img id="preview-image" class="max-h-40 rounded-lg mx-auto">
                    </div>
                </div>

                <!-- Ingredients -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-sm font-medium text-gray-700">Ingredients</label>
                        <button type="button" id="add-ingredient-btn" class="flex items-center text-[#111827] border border-gray-300 rounded-lg px-3 py-1.5 hover:bg-gray-50 hover:border-[#111827] hover:scale-105 transition-all duration-200 font-medium text-sm shadow-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Add Ingredient
                        </button>
                    </div>
                    <div id="ingredients-container" class="space-y-2 max-h-48 overflow-y-auto">
                        <div class="ingredient-item flex gap-2">
                            <input type="text" name="ingredients[]" placeholder="Ingredient 1" class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] transition" required />
                            <button type="button" class="remove-ingredient-btn text-gray-400 hover:text-red-600 transition p-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Instructions -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-sm font-medium text-gray-700">Instructions</label>
                        <button type="button" id="add-instruction-btn" class="flex items-center text-[#111827] border border-gray-300 rounded-lg px-3 py-1.5 hover:bg-gray-50 hover:border-[#111827] hover:scale-105 transition-all duration-200 font-medium text-sm shadow-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Add Step
                        </button>
                    </div>
                    <div id="instructions-container" class="space-y-2 max-h-48 overflow-y-auto">
                        <div class="instruction-item flex gap-2">
                            <span class="flex items-center text-gray-500 font-medium pt-2">1.</span>
                            <textarea name="instructions[]" rows="2" placeholder="Step 1" class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] resize-none transition" required></textarea>
                            <button type="button" class="remove-instruction-btn text-gray-400 hover:text-red-600 transition p-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 mt-4">
                    <button type="button" onclick="document.getElementById('createRecipe').classList.add('hidden'); document.body.classList.remove('overflow-hidden');" class="px-6 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                        Cancel
                    </button>
                    <button type="submit" class="cursor-pointer px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-lg hover:bg-[#29354d] transition duration-150">
                        Create Recipe
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryDropdownButton = document.getElementById('category-dropdown-button');
    const categoryDropdownMenu = document.getElementById('category-dropdown-menu');
    const categorySelectedText = document.getElementById('category-selected-text');
    const categoryOptions = document.querySelectorAll('.category-option');
    const hiddenCategorySelect = document.getElementById('recipe-category');
    const addIngredientBtn = document.getElementById('add-ingredient-btn');
    const ingredientsContainer = document.getElementById('ingredients-container');
    const addInstructionBtn = document.getElementById('add-instruction-btn');
    const instructionsContainer = document.getElementById('instructions-container');
    const imageUploadContainer = document.getElementById('image-upload-container');
    const imageInput = document.getElementById('recipe-image');
    const imagePreview = document.getElementById('image-preview');
    const previewImage = document.getElementById('preview-image');
    const recipeForm = document.getElementById('recipeForm');
    const submitBtn = recipeForm.querySelector('button[type="submit"]');

    let ingredients = [];
    let steps = [];

    categoryDropdownButton.addEventListener('click', function() {
        categoryDropdownMenu.classList.toggle('hidden');
    });
    
    categoryOptions.forEach(option => {
        option.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            categorySelectedText.textContent = value;
            hiddenCategorySelect.value = value;
            categoryDropdownMenu.classList.add('hidden');
        });
    });
    
    document.addEventListener('click', function(event) {
        if (!categoryDropdownButton.contains(event.target) && !categoryDropdownMenu.contains(event.target)) {
            categoryDropdownMenu.classList.add('hidden');
        }
    });

    addIngredientBtn.addEventListener('click', function() {
        const ingredientCount = ingredientsContainer.children.length + 1;
        const newIngredient = document.createElement('div');
        newIngredient.className = 'ingredient-item flex gap-2';
        newIngredient.innerHTML = `
            <input type="text" name="ingredients[]" placeholder="Ingredient ${ingredientCount}" class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] transition" required />
            <button type="button" class="remove-ingredient-btn text-gray-400 hover:text-red-600 transition p-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </button>
        `;
        ingredientsContainer.appendChild(newIngredient);
        newIngredient.querySelector('.remove-ingredient-btn').addEventListener('click', function() {
            newIngredient.remove();
            updateIngredientNumbers();
        });
    });

    addInstructionBtn.addEventListener('click', function() {
        const instructionCount = instructionsContainer.children.length + 1;
        const newInstruction = document.createElement('div');
        newInstruction.className = 'instruction-item flex gap-2';
        newInstruction.innerHTML = `
            <span class="flex items-center text-gray-500 font-medium pt-2">${instructionCount}.</span>
            <textarea name="instructions[]" rows="2" placeholder="Step ${instructionCount}" class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] resize-none transition" required></textarea>
            <button type="button" class="remove-instruction-btn text-gray-400 hover:text-red-600 transition p-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </button>
        `;
        instructionsContainer.appendChild(newInstruction);
        newInstruction.querySelector('.remove-instruction-btn').addEventListener('click', function() {
            newInstruction.remove();
            updateInstructionNumbers();
        });
    });

    function updateIngredientNumbers() {
        const items = ingredientsContainer.querySelectorAll('.ingredient-item');
        items.forEach((item, index) => {
            const input = item.querySelector('input');
            input.placeholder = `Ingredient ${index + 1}`;
        });
    }

    function updateInstructionNumbers() {
        const items = instructionsContainer.querySelectorAll('.instruction-item');
        items.forEach((item, index) => {
            const span = item.querySelector('span');
            const textarea = item.querySelector('textarea');
            span.textContent = `${index + 1}.`;
            textarea.placeholder = `Step ${index + 1}`;
        });
    }

    document.querySelectorAll('.remove-ingredient-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            this.closest('.ingredient-item').remove();
            updateIngredientNumbers();
        });
    });

    document.querySelectorAll('.remove-instruction-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            this.closest('.instruction-item').remove();
            updateInstructionNumbers();
        });
    });

    imageUploadContainer.addEventListener('click', () => imageInput.click());
    imageUploadContainer.addEventListener('dragover', e => { e.preventDefault(); imageUploadContainer.classList.add('border-[#111827]', 'bg-gray-50'); });
    imageUploadContainer.addEventListener('dragleave', () => imageUploadContainer.classList.remove('border-[#111827]', 'bg-gray-50'));
    imageUploadContainer.addEventListener('drop', e => {
        e.preventDefault();
        imageUploadContainer.classList.remove('border-[#111827]', 'bg-gray-50');
        if (e.dataTransfer.files.length) {
            imageInput.files = e.dataTransfer.files;
            handleImageSelection(e.dataTransfer.files[0]);
        }
    });
    imageInput.addEventListener('change', function() { if (this.files.length) handleImageSelection(this.files[0]); });
    function handleImageSelection(file) {
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = e => { previewImage.src = e.target.result; imagePreview.classList.remove('hidden'); };
            reader.readAsDataURL(file);
        }
    }

    recipeForm.addEventListener('submit', async function(e) {
        e.preventDefault();

        const ingredients = Array.from(document.querySelectorAll('input[name="ingredients[]"]')).map(i => i.value);
        const steps = Array.from(document.querySelectorAll('textarea[name="instructions[]"]')).map(t => t.value);
        const imageFile = imageInput.files[0]; // 👈 This gets the selected file

        const formData = new FormData(); // 👈 Use FormData instead of JSON
        formData.append('title', document.getElementById('recipe-title').value);
        formData.append('description', document.getElementById('recipe-description').value);
        formData.append('category', hiddenCategorySelect.value);
        formData.append('ingredients', JSON.stringify(ingredients));
        formData.append('body', JSON.stringify(steps));
        formData.append('prep_time', document.getElementById('recipe-prep-time').value);
        formData.append('cook_time', document.getElementById('recipe-cook-time').value);
        formData.append('servings', document.getElementById('recipe-servings').value);
        if (imageFile){
            formData.append('cover_image', imageFile);
            console.log("Uploading book: ");
            console.log(imageFile);
        }
        // formData.append('cover_image', imageFile);
        
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Creating Recipe...';

        try {
            const response = await fetch('/recipes', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', //< Why can't I get this?
                },
                body: formData // 👈 send FormData, not JSON
            });

            const result = await response.json();
            

            if (response.ok) {
                alert('Recipe created successfully!');
                // reset form (you can keep your existing reset logic)
            } else {
                alert(`Error: ${result.message || 'Failed to create recipe'}`);
            }
        } catch (error) {
            alert(`Network error: ${error.message}`);
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Create Recipe';
        }
    });
});
</script>
</div>



