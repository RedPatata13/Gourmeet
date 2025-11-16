<div id="editRecipe" class="fixed inset-0 overflow-y-auto hidden z-50" aria-labelledby="modal-title-editRecipe" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-gray-900/37 transition-opacity"></div>

    <!-- Modal container -->
    <div class="fixed inset-0 flex items-center justify-center p-4 z-50 pointer-events-none">
        <!-- Modal panel -->
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-5xl overflow-hidden text-left max-h-[95vh] flex flex-col relative z-50 pointer-events-auto">
            <div class="bg-white">
                <div class="px-6 pt-6 pb-4 flex justify-between items-center border-b border-gray-100">
                    <h3 class="text-xl font-semibold text-gray-900">Edit Recipe</h3>
                    <button onclick="document.getElementById('editRecipe').classList.add('hidden'); document.body.classList.remove('overflow-hidden');" id="close-edit-recipe-modal-x" class="text-gray-400 hover:text-gray-700 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form id="editRecipeForm" data-modal-content class="px-6 py-6 space-y-5 overflow-y-auto flex-grow" style="max-height: calc(95vh - 200px);">
                    <!-- Hidden recipe ID -->
                    <input type="hidden" id="edit-recipe-id" name="recipe_id" value="">

                    <div>
                        <label for="edit-recipe-title" class="block text-sm font-medium text-gray-700 mb-1">Recipe Title</label>
                        <input type="text" id="edit-recipe-title" name="title" placeholder="e.g., Chocolate Chip Cookies" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827]" required>
                    </div>
                    
                    <div>
                        <label for="edit-recipe-description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea id="edit-recipe-description" name="description" rows="2" placeholder="Brief description of your recipe" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827] resize-none" required></textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="edit-recipe-category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                            <div class="relative mt-1">
                                <!-- Hidden select for form submission -->
                                <select id="edit-recipe-category" name="category" class="hidden" required>
                                    <option value="">Select a category</option>
                                    <option value="Breakfast">Breakfast</option>
                                    <option value="Lunch">Lunch</option>
                                    <option value="Dinner">Dinner</option>
                                    <option value="Dessert">Dessert</option>
                                    <option value="Snack">Snack</option>
                                    <option value="Appetizer">Appetizer</option>
                                </select>
                                
                                <!-- Custom Dropdown -->
                                <div class="relative">
                                    <button 
                                        type="button"
                                        id="edit-category-dropdown-button"
                                        class="w-full bg-gray-50 border border-gray-300 rounded-lg shadow-sm p-2.5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-[#111827] focus:border-[#111827] transition"
                                    >
                                        <span id="edit-category-selected-text" class="text-gray-700">Select a category</span>
                                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    
                                    <!-- Dropdown Menu -->
                                    <div 
                                        id="edit-category-dropdown-menu"
                                        class="hidden absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-lg"
                                    >
                                        <div class="py-1">
                                            <button 
                                                type="button"
                                                data-value=""
                                                class="edit-category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                            >
                                                <span>Select a category</span>
                                            </button>
                                            <button 
                                                type="button"
                                                data-value="Breakfast"
                                                class="edit-category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                            >
                                                <span>Breakfast</span>
                                                <svg class="w-4 h-4 text-gray-500 checkmark hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </button>
                                            <button 
                                                type="button"
                                                data-value="Lunch"
                                                class="edit-category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                            >
                                                <span>Lunch</span>
                                                <svg class="w-4 h-4 text-gray-500 checkmark hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </button>
                                            <button 
                                                type="button"
                                                data-value="Dinner"
                                                class="edit-category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                            >
                                                <span>Dinner</span>
                                                <svg class="w-4 h-4 text-gray-500 checkmark hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </button>
                                            <button 
                                                type="button"
                                                data-value="Dessert"
                                                class="edit-category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                            >
                                                <span>Dessert</span>
                                                <svg class="w-4 h-4 text-gray-500 checkmark hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </button>
                                            <button 
                                                type="button"
                                                data-value="Snack"
                                                class="edit-category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                            >
                                                <span>Snack</span>
                                                <svg class="w-4 h-4 text-gray-500 checkmark hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </button>
                                            <button 
                                                type="button"
                                                data-value="Appetizer"
                                                class="edit-category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                            >
                                                <span>Appetizer</span>
                                                <svg class="w-4 h-4 text-gray-500 checkmark hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="edit-recipe-servings" class="block text-sm font-medium text-gray-700 mb-1">Servings</label>
                            <div class="relative">
                                <input type="number" id="edit-recipe-servings" name="servings" placeholder="4" min="1" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 pr-10 focus:border-[#111827]" required>
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
                            <label for="edit-recipe-prep-time" class="block text-sm font-medium text-gray-700 mb-1">Prep Time</label>
                            <input type="text" id="edit-recipe-prep-time" name="prep_time" placeholder="e.g., 15 mins" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827]">
                        </div>
                        <div>
                            <label for="edit-recipe-cook-time" class="block text-sm font-medium text-gray-700 mb-1">Cook Time</label>
                            <input type="text" id="edit-recipe-cook-time" name="cook_time" placeholder="e.g., 30 mins" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827]">
                        </div>
                    </div>

                    <div>
                        <label for="edit-recipe-image-url" class="block text-sm font-medium text-gray-700 mb-1">Image URL</label>
                        <input type="url" id="edit-recipe-image-url" name="image_url" placeholder="https://example.com/image.jpg" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827]">
                    </div>

                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label class="block text-sm font-medium text-gray-700">Ingredients</label>
                            <button 
                                type="button" 
                                id="edit-add-ingredient-btn"
                                class="flex items-center text-[#111827] border border-gray-300 rounded-lg px-3 py-1.5 hover:bg-gray-50 hover:border-[#111827] hover:scale-105 transition-all duration-200 font-medium text-sm shadow-sm"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Add
                            </button>
                        </div>
                        <div id="edit-ingredients-container" class="space-y-2 max-h-48 overflow-y-auto">
                            <!-- Ingredients will be populated dynamically -->
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label class="block text-sm font-medium text-gray-700">Instructions</label>
                            <button 
                                type="button" 
                                id="edit-add-instruction-btn"
                                class="flex items-center text-[#111827] border border-gray-300 rounded-lg px-3 py-1.5 hover:bg-gray-50 hover:border-[#111827] hover:scale-105 transition-all duration-200 font-medium text-sm shadow-sm"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Add
                            </button>
                        </div>
                        <div id="edit-instructions-container" class="space-y-2 max-h-48 overflow-y-auto">
                            <!-- Instructions will be populated dynamically -->
                        </div>
                    </div>

                </form>  
            </div>

            <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 mt-4">
                <button 
                    onclick="document.getElementById('editRecipe').classList.add('hidden'); document.body.classList.remove('overflow-hidden');" 
                    type="button" 
                    class="px-6 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition"
                >
                    Cancel
                </button>                
                <button 
                    type="button"
                    onclick="submitEditRecipe()"
                    class="cursor-pointer px-4 py-2 text-sm font-medium text-white bg-[#111827] rounded-lg hover:bg-[#29354d] transition duration-150"
                >
                    Update Recipe
                </button>    
            </div>

        </div>
    </div>
</div>

<script>
    let editIngredientCount = 0;
    let editInstructionCount = 0;

    // Function to open edit modal and populate with recipe data
    // Make it globally accessible
    window.openEditRecipeModal = function(recipeData) {
        console.log('openEditRecipeModal called with data:', recipeData);
        
        // Check if modal exists
        const editModal = document.getElementById('editRecipe');
        if (!editModal) {
            console.error('Edit modal element not found!');
            return;
        }

        // Populate form fields
        const recipeIdEl = document.getElementById('edit-recipe-id');
        const titleEl = document.getElementById('edit-recipe-title');
        const descriptionEl = document.getElementById('edit-recipe-description');
        const servingsEl = document.getElementById('edit-recipe-servings');
        const prepTimeEl = document.getElementById('edit-recipe-prep-time');
        const cookTimeEl = document.getElementById('edit-recipe-cook-time');
        const imageEl = document.getElementById('edit-recipe-image-url');

        if (recipeIdEl) recipeIdEl.value = recipeData.recipeId || '';
        if (titleEl) titleEl.value = recipeData.title || '';
        if (descriptionEl) descriptionEl.value = recipeData.description || '';
        if (servingsEl) servingsEl.value = recipeData.servings || '';
        if (prepTimeEl) prepTimeEl.value = recipeData.prepTime || '';
        if (cookTimeEl) cookTimeEl.value = recipeData.cookTime || '';
        if (imageEl) imageEl.value = recipeData.image || '';

        // Set category
        if (recipeData.category) {
            const categorySelect = document.getElementById('edit-recipe-category');
            const categorySelectedText = document.getElementById('edit-category-selected-text');
            categorySelect.value = recipeData.category;
            categorySelectedText.textContent = recipeData.category;
            
            // Update checkmarks
            document.querySelectorAll('.edit-category-option').forEach(opt => {
                const checkmark = opt.querySelector('.checkmark');
                if (opt.getAttribute('data-value') === recipeData.category) {
                    checkmark.classList.remove('hidden');
                } else {
                    checkmark.classList.add('hidden');
                }
            });
        }

        // Populate ingredients
        const ingredientsContainer = document.getElementById('edit-ingredients-container');
        ingredientsContainer.innerHTML = '';
        editIngredientCount = 0;
        
        if (recipeData.ingredients && Array.isArray(recipeData.ingredients) && recipeData.ingredients.length > 0) {
            recipeData.ingredients.forEach((ingredient, index) => {
                editIngredientCount++;
                const ingredientDiv = document.createElement('div');
                ingredientDiv.className = 'edit-ingredient-item flex gap-2';
                ingredientDiv.innerHTML = `
                    <input 
                        type="text" 
                        name="ingredients[]"
                        value="${ingredient.replace(/"/g, '&quot;')}" 
                        placeholder="Ingredient ${editIngredientCount}" 
                        class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] transition"
                        required
                    />
                    <button 
                        type="button" 
                        class="edit-remove-ingredient-btn text-gray-400 hover:text-red-600 transition p-2"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                `;
                ingredientsContainer.appendChild(ingredientDiv);
            });
        } else {
            // Add one empty ingredient field
            addEditIngredient();
        }

        // Populate instructions
        const instructionsContainer = document.getElementById('edit-instructions-container');
        instructionsContainer.innerHTML = '';
        editInstructionCount = 0;
        
        if (recipeData.instructions && Array.isArray(recipeData.instructions) && recipeData.instructions.length > 0) {
            recipeData.instructions.forEach((instruction, index) => {
                editInstructionCount++;
                const instructionDiv = document.createElement('div');
                instructionDiv.className = 'edit-instruction-item flex gap-2';
                instructionDiv.innerHTML = `
                    <span class="flex items-center text-gray-500 font-medium pt-2">${editInstructionCount}.</span>
                    <textarea 
                        name="instructions[]"
                        rows="2" 
                        placeholder="Step ${editInstructionCount}" 
                        class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] resize-none transition"
                        required
                    >${instruction.replace(/</g, '&lt;').replace(/>/g, '&gt;')}</textarea>
                    <button 
                        type="button" 
                        class="edit-remove-instruction-btn text-gray-400 hover:text-red-600 transition p-2"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                `;
                instructionsContainer.appendChild(instructionDiv);
            });
        } else {
            // Add one empty instruction field
            addEditInstruction();
        }

        updateEditRemoveButtons();
        updateEditInstructionNumbers();

        // Show modal
        console.log('Showing edit modal');
        editModal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        console.log('Edit modal should now be visible');
    };

    // Add Ingredient
    function addEditIngredient() {
        editIngredientCount++;
        const container = document.getElementById('edit-ingredients-container');
        const newItem = document.createElement('div');
        newItem.className = 'edit-ingredient-item flex gap-2';
        newItem.innerHTML = `
            <input 
                type="text" 
                name="ingredients[]"
                placeholder="Ingredient ${editIngredientCount}" 
                class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] transition"
                required
            />
            <button 
                type="button" 
                class="edit-remove-ingredient-btn text-gray-400 hover:text-red-600 transition p-2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        `;
        container.appendChild(newItem);
        updateEditRemoveButtons();
    }

    document.getElementById('edit-add-ingredient-btn').addEventListener('click', addEditIngredient);

    // Add Instruction
    function addEditInstruction() {
        editInstructionCount++;
        const container = document.getElementById('edit-instructions-container');
        const newItem = document.createElement('div');
        newItem.className = 'edit-instruction-item flex gap-2';
        newItem.innerHTML = `
            <span class="flex items-center text-gray-500 font-medium pt-2">${editInstructionCount}.</span>
            <textarea 
                name="instructions[]"
                rows="2" 
                placeholder="Step ${editInstructionCount}" 
                class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] resize-none transition"
                required
            ></textarea>
            <button 
                type="button" 
                class="edit-remove-instruction-btn text-gray-400 hover:text-red-600 transition p-2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        `;
        container.appendChild(newItem);
        updateEditRemoveButtons();
        updateEditInstructionNumbers();
    }

    document.getElementById('edit-add-instruction-btn').addEventListener('click', addEditInstruction);

    // Update remove buttons visibility
    function updateEditRemoveButtons() {
        const ingredientItems = document.querySelectorAll('.edit-ingredient-item');
        const instructionItems = document.querySelectorAll('.edit-instruction-item');
        
        ingredientItems.forEach((item) => {
            const removeBtn = item.querySelector('.edit-remove-ingredient-btn');
            if (ingredientItems.length > 1) {
                removeBtn.classList.remove('hidden');
            } else {
                removeBtn.classList.add('hidden');
            }
        });

        instructionItems.forEach((item) => {
            const removeBtn = item.querySelector('.edit-remove-instruction-btn');
            if (instructionItems.length > 1) {
                removeBtn.classList.remove('hidden');
            } else {
                removeBtn.classList.add('hidden');
            }
        });
    }

    // Update instruction step numbers
    function updateEditInstructionNumbers() {
        const instructionItems = document.querySelectorAll('.edit-instruction-item');
        instructionItems.forEach((item, index) => {
            const numberSpan = item.querySelector('span');
            numberSpan.textContent = `${index + 1}.`;
        });
    }

    // Remove ingredient
    document.addEventListener('click', function(e) {
        if (e.target.closest('.edit-remove-ingredient-btn')) {
            const item = e.target.closest('.edit-ingredient-item');
            if (document.querySelectorAll('.edit-ingredient-item').length > 1) {
                item.remove();
                updateEditRemoveButtons();
            }
        }
    });

    // Remove instruction
    document.addEventListener('click', function(e) {
        if (e.target.closest('.edit-remove-instruction-btn')) {
            const item = e.target.closest('.edit-instruction-item');
            if (document.querySelectorAll('.edit-instruction-item').length > 1) {
                item.remove();
                updateEditRemoveButtons();
                updateEditInstructionNumbers();
            }
        }
    });

    // Custom Dropdown Functionality for Edit
    const editCategoryButton = document.getElementById('edit-category-dropdown-button');
    const editCategoryMenu = document.getElementById('edit-category-dropdown-menu');
    const editCategorySelect = document.getElementById('edit-recipe-category');
    const editCategorySelectedText = document.getElementById('edit-category-selected-text');
    const editCategoryOptions = document.querySelectorAll('.edit-category-option');

    // Toggle dropdown
    editCategoryButton.addEventListener('click', function(e) {
        e.stopPropagation();
        editCategoryMenu.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!editCategoryButton.contains(e.target) && !editCategoryMenu.contains(e.target)) {
            editCategoryMenu.classList.add('hidden');
        }
    });

    // Handle option selection
    editCategoryOptions.forEach(option => {
        option.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            const text = this.querySelector('span').textContent;
            
            editCategorySelect.value = value;
            editCategorySelectedText.textContent = text || 'Select a category';
            
            editCategoryOptions.forEach(opt => {
                const checkmark = opt.querySelector('.checkmark');
                if (opt.getAttribute('data-value') === value && value !== '') {
                    checkmark.classList.remove('hidden');
                } else {
                    checkmark.classList.add('hidden');
                }
            });
            
            editCategoryMenu.classList.add('hidden');
        });
    });

    // Form submission - Backend friendly
    window.submitEditRecipe = function() {
        const form = document.getElementById('editRecipeForm');
        if (!form) {
            console.error('Edit recipe form not found');
            return;
        }

        // Validate form
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        const formData = new FormData(form);
        const recipeId = document.getElementById('edit-recipe-id').value;

        if (!recipeId) {
            alert('Recipe ID not found');
            return;
        }

        // Get CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        if (!csrfToken) {
            console.warn('CSRF token not found. Make sure meta tag is present in layout.');
        }

        // Prepare data for backend
        // Filter out empty ingredients and instructions
        const ingredients = formData.getAll('ingredients[]').filter(ing => ing.trim() !== '');
        const instructions = formData.getAll('instructions[]').filter(inst => inst.trim() !== '');

        const recipeData = {
            title: formData.get('title') || '',
            description: formData.get('description') || '',
            category: formData.get('category') || '',
            servings: formData.get('servings') || '',
            prep_time: formData.get('prep_time') || '',
            cook_time: formData.get('cook_time') || '',
            image_url: formData.get('image_url') || '',
            image: formData.get('image_url') || '', // Alternative field name
            ingredients: ingredients,
            instructions: instructions,
        };

        // Show loading state (optional - you can add a loading spinner)
        const submitButton = form.querySelector('button[onclick="submitEditRecipe()"]');
        const originalButtonText = submitButton ? submitButton.textContent : '';
        if (submitButton) {
            submitButton.disabled = true;
            submitButton.textContent = 'Updating...';
        }

        // Backend API endpoint
        // Expected endpoint: PUT /api/recipes/{id}
        // Alternative: POST /api/recipes/{id} with _method=PUT for Laravel
        const apiEndpoint = `/api/recipes/${recipeId}`;
        
        fetch(apiEndpoint, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken || '',
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
            },
            body: JSON.stringify(recipeData)
        })
        .then(async response => {
            const data = await response.json();
            
            if (!response.ok) {
                // Handle validation errors
                if (response.status === 422 && data.errors) {
                    let errorMessage = 'Validation errors:\n';
                    Object.keys(data.errors).forEach(key => {
                        errorMessage += `- ${key}: ${data.errors[key].join(', ')}\n`;
                    });
                    throw new Error(errorMessage);
                }
                throw new Error(data.message || `Server error: ${response.status}`);
            }
            
            return data;
        })
        .then(data => {
            // Success - close modal and refresh
            if (submitButton) {
                submitButton.disabled = false;
                submitButton.textContent = originalButtonText;
            }
            
            // Close modal
            document.getElementById('editRecipe').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            
            // Option 1: Reload page to show updated data
            // location.reload();
            
            // Option 2: Update UI without reload (better UX)
            // Update the recipe card in the feed if it exists
            const cardElement = document.querySelector(`[data-recipe-id="${recipeId}"]`);
            if (cardElement && data.recipe) {
                // Update card data attributes
                if (data.recipe.title) cardElement.setAttribute('data-title', data.recipe.title);
                if (data.recipe.description) cardElement.setAttribute('data-description', data.recipe.description);
                if (data.recipe.image) cardElement.setAttribute('data-image', data.recipe.image);
                if (data.recipe.category) cardElement.setAttribute('data-category', data.recipe.category);
                if (data.recipe.prep_time) cardElement.setAttribute('data-prep-time', data.recipe.prep_time);
                if (data.recipe.servings) cardElement.setAttribute('data-servings', data.recipe.servings);
                if (data.recipe.ingredients) {
                    cardElement.setAttribute('data-ingredients', JSON.stringify(data.recipe.ingredients));
                }
                if (data.recipe.instructions) {
                    cardElement.setAttribute('data-instructions', JSON.stringify(data.recipe.instructions));
                }
            }
            
            // Show success message
            alert('Recipe updated successfully!');
            
            // Reload to ensure all data is fresh
            location.reload();
        })
        .catch(error => {
            console.error('Error updating recipe:', error);
            
            // Restore button state
            if (submitButton) {
                submitButton.disabled = false;
                submitButton.textContent = originalButtonText;
            }
            
            // Show error message
            alert(error.message || 'Failed to update recipe. Please try again.');
        });
    };

    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.getElementById('editRecipe');
            if (!modal.classList.contains('hidden')) {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        }
    });
</script>

